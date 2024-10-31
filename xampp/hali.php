<html>
<head>
<title>HALI DÜKKANI</title>

    
<meta charset="utf-8">   
</head>
<body background="imagess.jpg">

<form action="" method="post" >
    <center>
        <center>
            <center>
                <center>
                    <center>
                        <center>
<table border="0">
<tr>
<td>Ad :</td>
<td><input type="text" name="adi"  required placeholder="Lütfen Adınızı Girin"></td>
</tr>
<tr>
<td>Soyad :</td>
<td><input type="text"name="soyadi" required placeholder="Lütfen Soyadınızı Girin"></td>
</tr>
<tr>
<td>Randevu Tarihi :</td>
<td><input type="date"name="tarih"required placeholder="Lütfen Randevu Tarihini Girin"></td>
</tr>
<tr>
<td>Randevu Saati :</td>
<td><input type="datetime"name="saat"required placeholder="Lütfen Saati giriniz"></td>
</tr>
<tr>
<td>Cep Telefonu :</td>
<td><input type="number"name="telefon" required placeholder="Lütfen Telefon numaranızı girin"></td>
</tr>
<td>Halı adedi :</td>
<td><input type="number"name="adet" required placeholder="Lütfen Halı adedini girin"></td>
</tr>


 

 

 

<tr>
<td colspan="2">
<input type="submit" name="kaydet"  value="KAYDET">
<input type="reset" name="sil"  value="TEMİZLE">
<input type="submit" name="guncelle"value="Değiştir">

       
</td>
</tr>        
    </table>    
 
</form>

    
</body>
 
</html>




<?php
    $db=new PDO("mysql:host=localhost; dbname=halı; charset=utf8","root","");
    if(isset($_POST["kaydet"]))
  {
         $kadi=$_POST["adi"];
        $ksoyadi=$_POST["soyadi"];
           $ktarih=$_POST["tarih"];
        $ksaat=$_POST["saat"];
        $ktelefon=$_POST["telefon"];
        $kadet=$_POST["adet"];
         if($db)
 {
        echo "Veritabanı bağlantısı gerçekleşti!"."<br>";
       $kaydet=$db->exec("INSERT INTO dukkan (adi,soyadi,tarih,saat,telefon,adet)VALUES('$kadi','$ksoyadi','$ktarih','$ksaat','$ktelefon','$kadet')");
       if($kaydet)
         {
             echo "Yeni kayıt eklendi";
           }
             else
          {
           echo "Kayıt ekleme başarısız oldu";
           }
    }
    
}
if(isset($_POST["guncelle"]))
  {
         $kadi=$_POST["adi"];
        $ksoyadi=$_POST["soyadi"];
           $ktarih=$_POST["tarih"];
        $ksaat=$_POST["saat"];
        $ktelefon=$_POST["telefon"];
        $kadet=$_POST["adet"];
         if($db)
 {
        echo "Veritabanı bağlantısı gerçekleşti!"."<br>";
       $kaydet=$db->exec("INSERT INTO dukkan (adi,soyadi,tarih,saat,telefon,adet)VALUES('$kadi','$ksoyadi','$ktarih','$ksaat','$ktelefon','$kadet')");
       if($kaydet)
         {
             echo "Güncelleme başarılı oldu";
           }
             else
          {
           echo "Güncelleme başarısız oldu";
           }
    }
    
}
if($db)
    {

        $listele= $db-> query("SELECT * FROM halı.dukkan ");
    while ($gelenveri = $listele->fetch()) 
    {

         echo "adi: ".$gelenveri['adi']."    ".
             "soyadi: ".$gelenveri['soyadi']."    ".
             "tarih: ".$gelenveri['tarih']."    ".
             "saat: ".$gelenveri['saat']."    ".
             "telefon: ".$gelenveri['telefon']."    ".
            "adet: ".$gelenveri['adet']."<br>";
    }
    }

    ?>