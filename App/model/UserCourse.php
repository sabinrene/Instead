<?php
    class UserCourse {
      private $idCourse;
      private $idUser;
      private $userCourse;
      private $text;

        private $con;
        function __construct($con) {
            $this->con = $con;
        }
        function setIdCourse($idCourse){
          $this->idCourse  = $idCourse;
        }
        function setIdUser($idUser){
          $this->idUser  = $idUser;
        }
        function setUserCourse($userCourse){
          $this->userCourse  = $userCourse;
        }
        function setText($text){
          $this->text  = $text;
        }
        function save(){
          try{
            $sql = "INSERT INTO `UsersCourses`( `idUsers`, `idCourse`, `userCourses`,`text`) VALUES ('$this->idUser','$this->idCourse','$this->userCourse','$this->userCourse')";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
            }
        }





        function upadate(){/*`imagecourse`= '$this->imageName',*/
          try{
            $sql = "UPDATE
                      `UsersCourses`SET `userCourses`= '$this->userCourse',
                                        `text`= '$this->userCourse'

                    WHERE `idUsers` = $this->idUser
                    AND `idCourse` = $this->idCourse ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }




        function updateNamePDF(){
            try{
              $sql = "UPDATE `PDF` SET
              `namePDF`='$this->namePDF'
              WHERE `idPDF` =  '$this->idPDF'";
              $this->con->conn()->exec($sql);
              $this->con->close();
                }
            catch(PDOException $e){
                echo $query . "<br>" . $e->getMessage();
              }
        }










         function getUserCourse(){
           try{
             $sql = $this->con->conn()->query(
               "SELECT * FROM `UsersCourses`
               WHERE `idUsers` = '$this->idUser' AND `idCourse` = '$this->idCourse'");
             $data = $sql->fetch(PDO::FETCH_OBJ);
             $this->con->close();
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
             }
             return $data;
          }


          function getUserCourseByIdUser(){
            try{
              $sql = $this->con->conn()->query(
                "SELECT * FROM `UsersCourses`
                WHERE `idUsers` = '$this->idUser' ");
              $data = $sql->fetchAll(PDO::FETCH_OBJ);
              $this->con->close();
                }
            catch(PDOException $e){
                echo $query . "<br>" . $e->getMessage();
              }
              return $data;
           }





         function delete(){
             try{
               $sql =  "DELETE FROM `UsersCourses` WHERE `idCourse`= '$this->idCourse' AND `idUsers`= '$this->idUser' AND `userCourses`= '$this->userCourse'";
               $this->con->conn()->exec($sql);
               $this->con->close();
                 }
             catch(PDOException $e){
                 echo $query . "<br>" . $e->getMessage();
               }
         }
}
?>
