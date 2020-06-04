<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Kayıt Formu</title>
<link rel="stylesheet" type="text/css" href="satyle.css"/>
</head>

<body>
<div id="kayitform">
<form action="kayit.php" method="post">
<table width="100%" border="0" align="center">
  <tr>
    <td colspan="2" align="center" valign="middle">ÜYE KAYIT FORMU</td>
    </tr>
  <tr>
    <td>Kullanıcı Adı</td>
    <td><label for="kullaniciadi"></label>
      <input type="text" name="kullaniciadi" id="kullaniciadi" /></td>
  </tr>
  <tr>
    <td>E-Posta</td>
    <td><label for="eposta"></label>
      <input type="text" name="eposta" id="eposta" /></td>
  </tr>
  <tr>
    <td>Şifre</td>
    <td><label for="sifre"></label>
      <input type="password" name="sifre" id="sifre" /></td>
  </tr>
  <tr>
    <td>Doğum Yeri</td>

    <td><label for="dogumyeri"></label>
      <select name="dogumyeri" id="dogumyeri">
        <option value="İzmir">İzmir</option>
        <option value="Ankara">Ankara</option>
        <option value="İstanbul">İstanbul</option>
      </select></td>
  </tr>
  <tr>
    <td>Cinsiyet</td>
    <td><label for="cinsiyet"></label>
      <select name="cinsiyet" id="cinsiyet">
        <option value="Erkek">Erkek</option>
        <option value="Bayan">Bayan</option>
      </select></td>
  </tr>
  <tr>
    <td>Adres</td>
    <td><label for="adres"></label>
      <textarea name="adres" id="adres" cols="30" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><input type="submit" name="btn" id="btn" value="Kaydet" />
      <input type="reset" name="button2" id="button2" value="Temizle" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>