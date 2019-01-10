<?php 
/* 
* Obsługa bazy danych mysqli 
* by bidziu
*/ 

class sqlService 
{ 
      var $query; 
      var $result; 
      var $records_rows; 
      var $records; 
      var $dbHost; 
      var $dbUser; 
      var $dbHaslo; 
      var $dbName; 
      var $connection; 

      /* 
       * konstruktor 
       */ 
      function sqlService() 
      { 
          global $cfg_host_db, $cfg_login_db, $cfg_haslo_db, $cfg_baza_db; 
          $this -> query = ''; 
          $this -> result = ''; 
          $this -> records_rows = ''; 
          $this -> records = array(); 
          $this -> dbHost = 'localhost'; // nazwa hosta 
          $this -> dbUser = 'root'; // login do bazy 
          $this -> dbHaslo = ''; // hasło do bazy 
          $this -> dbName = 'blog'; // nazwa bazy danych 
          $this -> connection = FALSE; 
      } 


      /* 
       * obsługa błędów 
       */ 
      function sqlError() 
      { 
        //   echo '<br><b>Błąd mysqli #'.mysqli_errno().'</b>: '.mysqli_error() .'<br>'; 
      } 
      /* 
       * koniec obsługi błędów: sqlError(); 
       */ 


      /* 
       * łączenie z bazą danych 
       */ 
      function sqlConnect() 
      { 
          $this -> connection = new mysqli($this -> dbHost, $this -> dbUser,
           $this -> dbHaslo);

          if (($this -> connection == TRUE) && ($this -> dbName != '')) 
          { 
             if ($this -> dbName = @mysqli_select_db($this -> dbName) == TRUE) 
             { 
                return TRUE; 
             } 
             else 
             { 
                 $this -> sqlError(); 
                 mysqli_close($this -> connection); 
                 return FALSE; 
             } 
          } 
          else 
          { 
              $this -> sqlError(); 
              return FALSE; 
          } 
      } 
      /* 
       * koniec łączenia z bazą: sqlConnect() 
       */ 


      /* 
       * zamknięcie połączenia i kasowanie zmiennych 
       */ 
      function sqlClose() 
      { 
          if (isset($this -> connection)) 
          { 
             if ($this -> result) 
             { 
                mysqli_free_result($this -> result); 
             }; 
             mysqli_close($this -> connection); 
             unset( 
                   $this -> query, 
                   $this -> result, 
                   $this -> records_rows, 
                   $this -> records, 
                   $this -> dbHost, 
                   $this -> dbUser, 
                   $this -> dbHaslo, 
                   $this -> dbName, 
                   $this -> connection 
             ); 
             return TRUE; 
          } 
          else 
          { 
             $this -> sqlError(); 
             return FALSE; 
          }; 
      } 
      /* 
       * koniec zamknięcia połączenia i kasowania zmiennych: sqlClose() 
       */ 


      /* 
       * obsługa zapytań do bazy 
       */ 
      function sqlQuery($query) 
      { 
           $this -> query = $query; 
           if (($this -> result = @mysqli_query($this -> query)) == TRUE) 
           { 
              return $this -> result; 
           } 
           else 
           { 
              $this -> sqlError(); 
              return FALSE; 
           } 
      } 
      /* 
       * koniec obsługi zapytań: sqlQuery() 
       */ 


      /* 
       * obsługa zapytań - zwracanie wyniku: sqlResult() 
       */ 

       function sqlResult() 
       { 
           if (($this -> connection == TRUE) && ($this -> result != NULL)) 
           { 
              $this -> records = mysqli_fetch_array($this -> result); 
              return $this -> records; 
           } 
           else 
           { 
              $this -> sqlError(); 
              return FALSE; 
           } 
       } 
      /* 
       * koniec obsługi zapytań - zwracanie wyniku: sqlResult() 
       */ 


      /* 
       * obsługa zapytań - zwracanie liczby pól: sqlRows() 
       */ 
       function sqlRows() 
       { 
           if ($this -> records_rows = mysqli_num_rows($this -> result)) 
           { 
              return $this -> records_rows; 
           } 
           else 
           { 
              $this -> sqlError(); 
              return FALSE; 
           } 
       } 
      /* 
       * koniec obsługi zapytań - zwracanie liczby pól: sqlRows() 
       */ 



}; 
/* 
* koniec klasy obsługi bazy danych: sqlService 
*/ 
?>