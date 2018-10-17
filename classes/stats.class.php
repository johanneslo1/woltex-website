<?php

class Stats
  {
    private $db;

    public function __construct()
      {
        $this->db = new db();
      }



      public function getCredits($UUID)
        {
          $this->db = $this->db->dbConnect('lobby');

          $statement = $this->db->prepare("SELECT * FROM Credits WHERE UUID = :UUID LIMIT 1");
          $statement->execute(array('UUID' => $UUID));
          $data = $statement->fetch();

          if($statement->rowCount() == 1)
            {
              return $data['Creds'];
            }

        }
        /*
        public function getCreationTimeStamp($UUID)
          {
            $this->db = $this->db->dbConnect('lp');

            $statement = $this->db->prepare("SELECT `time` FROM ---------  WHERE UUID = :UUID");
            $statement->execute(array('UUID' => $UUID));
            $data = $statement->fetch();

            if($statement->rowCount() == 1)
              {
                return $data['time'];
              }

          }
          */
        public function getLanguage($UUID)
          {
            $this->db = $this->db->dbConnect('lobby');

            $statement = $this->db->prepare("SELECT Lang FROM Language WHERE UUID = :UUID LIMIT 1");
            $statement->execute(array('UUID' => $UUID));
            $data = $statement->fetch();

            if($statement->rowCount() == 1)
              {
                return $data['Lang'];
              }

          }

      public function getBestStats($game, $limit)
        {
          $this->db = new db();
          $this->db = $this->db->dbConnect($game);

          $statement = $this->db->prepare("SELECT Kills, Deaths, UUID, (Kills / Deaths) AS KD FROM Stats ORDER BY KD DESC LIMIT $limit");
          $statement->execute();
          $data = $statement->fetchAll();

          return $data;
        }



      public function getNameByUUID($UUID)
        {
          $this->db = new db();
          $this->db = $this->db->dbConnect('lobby');

          $statement = $this->db->prepare("SELECT Name FROM Credits WHERE UUID = :UUID LIMIT 1");
          $statement->execute(array('UUID' => $UUID));
          $data = $statement->fetch();

          if($statement->rowCount() == 1)
            {
              return $data['Name'];
            }
        }

      public function getStats($UUID)
        {
            $this->db = $this->db->dbConnect('tm');

            $statement = $this->db->prepare("SELECT Kills, Deaths, Wins FROM Stats WHERE UUID = :UUID LIMIT 1");
            $statement->execute(array('UUID' => $UUID));
            $data = $statement->fetch();





            $this->db = new db();
            $this->db = $this->db->dbConnect('starwars');

            $statement = $this->db->prepare("SELECT Kills, Deaths, Wins FROM Stats WHERE UUID = :UUID LIMIT 1");
            $statement->execute(array('UUID' => $UUID));
            $data_ = $statement->fetch();

            return array(
              'tm' =>array('Kills' => $data['Kills'],
                                    'Deaths' => $data['Deaths'],
                                    'Wins' => $data['Wins']),

              'starwars' => array('Kills' => $data_['Kills'],
                                    'Deaths' => $data_['Deaths'],
                                    'Wins' => $data_['Wins'])
                        );

        }
    public function getPlayedGames($UUID)
      {

        $gameStats = $this->getStats($UUID);

        return array('starwars' => $gameStats['starwars']['Wins'] + $gameStats['starwars']['Deaths'], 'tm' => $gameStats['tm']['Wins'] + $gameStats['tm']['Deaths']);
      }

    public function getPlayerByName($name)
      {
        $this->db = $this->db->dbConnect('lobby');

        $statement = $this->db->prepare("SELECT UUID FROM Credits WHERE Name = :name LIMIT 1");
        $statement->execute(array('name' => $name));
        $data = $statement->fetch();

        if($statement->rowCount() == 1)
          {
            return $data['UUID'];
          }
      }

    public function countPlayers()
      {
        $this->db = $this->db->dbConnect('lobby');

        $statement = $this->db->prepare("SELECT Creds FROM Credits");
        $statement->execute();
        $data = $statement->rowCount();


            return $data;

      }

    /* Global Stats */
    public function getAllCredits()
      {
          $this->db = $this->db->dbConnect('lobby');

          $statement = $this->db->prepare("SELECT Sum(Creds) AS totalCreds FROM Credits");
          $statement->execute();
          $data_ = $statement->fetch();

          if($data_)
            {
              return $data_['totalCreds'];
            }
      }

    public function countLanguages()
      {
        $this->db = $this->db->dbConnect('lobby');

        $statement = $this->db->prepare("SELECT Lang, Count(Lang) AS counLang FROM Language GROUP BY Lang");
        $statement->execute();
        $data = $statement->fetchAll();

        if($data)
          {
            return $data;
          }
      }

      public function getAllKills()
        {
          $this->db = $this->db->dbConnect('starwars');

          $statement = $this->db->prepare("SELECT Sum(Kills) AS totalKills FROM Stats");
          $statement->execute();
          $data = $statement->fetch();

          $this->db = new db();
          $this->db = $this->db->dbConnect('tm');

          $statement = $this->db->prepare("SELECT Sum(Kills) AS totalKills FROM Stats");
          $statement->execute();
          $data_ = $statement->fetch();

          $a = $data['totalKills'] + $data_['totalKills'];

          return $a;
        }
  }

 ?>
