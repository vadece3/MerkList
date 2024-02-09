<?php
class MerkClass
{

    public function create($servername, $username, $password, $databasename, $Name, $Beschreibung, $Datum, $Uhrzeit, $Status)
    {

        //connect to database
        $conn = mysqli_connect($servername, $username, $password, $databasename);

        $createQuery = "INSERT INTO merkliste (Name, Beschreibung, Datum, Uhrzeit, Status) VALUES ('$Name', '$Beschreibung', '$Datum', '$Uhrzeit', '$Status')";

        mysqli_query($conn, $createQuery);
        mysqli_close($conn);
    }



    public function read($servername, $username, $password, $databasename)
    {

        $checkBox = null;

        //connect to database
        $conn = mysqli_connect($servername, $username, $password, $databasename);

        $readQuery = "SELECT * FROM merkliste";
        $readResult = mysqli_query($conn, $readQuery);
        if ($readResult == TRUE) {

            while ($row = mysqli_fetch_array($readResult)) {
               
                if ($row['Status'] == "erledigt") {
                    $checkBox = "checked";
                }else if ($row['Status'] == "nicht erledigt") {
                    $checkBox = "unchecked";
                }

                echo "<tr>
                <form action='control/merkUpdateRemove.php' method='post'>
                <td><input class='form-control' name='UpdateName' value='";
                echo$row['Name'];
                echo"'/></td><td><input class='form-control' name='UpdateBeschreibung' value='";
                echo $row['Beschreibung'];
                echo"'/></td><td><input type='date' class='form-control' placeholder='dd-mm-yyyy' name='UpdateDatum' value='";
                echo $row['Datum'];
                echo"'/></td><td><input type='time' class='form-control' name='UpdateUhrzeit' value='";
                echo $row['Uhrzeit'];
                echo"'/></td>";
                echo "<td><input name='StatusCheck' onChange='this.form.submit()' type='checkbox' ";
                echo $checkBox;
                echo "/><input type=hidden name='id' value='";
                echo $row['id'];
                echo "'/></td><td>
                    <input type='checkbox' name='DataUpdate' onClick=\" if (confirm('Aktualisieren?')){;return this.form.submit();}\" class='fa fa-edit mr-1' value='Aktualisieren' />
                    <input type='checkbox' name='Remove' onClick=\"if (confirm('Entfernen?')){;return this.form.submit();}\" class='fa fa-times' ' value='Entfernen' />
                    </td> 
                    </form>
                    </tr>";
            }
        }
    }
    

    public function remove($servername, $username, $password, $databasename,$id)
    {
         //connect to database
         $conn = mysqli_connect($servername, $username, $password, $databasename);

         $removeQuery = "DELETE FROM merkliste WHERE id='$id'";
 
         mysqli_query($conn, $removeQuery);
         mysqli_close($conn);
    }



    public function update($servername, $username, $password, $databasename,$id,$Name,$Beschreibung,$Datum,$Uhrzeit)
    {
        //connect to database
        $conn = mysqli_connect($servername, $username, $password, $databasename);

        $updateQuery = "UPDATE merkliste SET 
        Name = '$Name' , Beschreibung = '$Beschreibung',
        Datum = '$Datum' , Uhrzeit = '$Uhrzeit' 
        WHERE id='$id'";

        mysqli_query($conn, $updateQuery);
        mysqli_close($conn);
    }



    public function checkboxUpdate($servername, $username, $password, $databasename,$id,$Status)
    {
        //connect to database
        $conn = mysqli_connect($servername, $username, $password, $databasename);

        $updateQuery = "UPDATE merkliste SET 
        Status = '$Status' 
        WHERE id='$id'";

        mysqli_query($conn, $updateQuery);
        mysqli_close($conn);
    }

}












    