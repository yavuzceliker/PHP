<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
		<form name="form" action="kaydet.php" method="post">
        	<table border="10">
            	<tr>
                	<td>ADINIZ:</td>
                    <td><input type="text" name="adi" maxlenght="30" min="2"/></td>
                </tr>
            	<tr>
                	<td>SOYADINIZ:</td>
                    <td><input type="text" name="soyad" maxlenght="30" min="2"/></td>
                </tr>
            	<tr>
                	<td>ŞİFRE:</td>
                    <td><input type="password" name="sifre" maxlenght="12" min="2" /></td>
                </tr>
            	<tr>
                	<td>CİNSİYET:</td>
                    <td>
                    	<input type="radio" name="cins" />ERKEK <br />
                        <input type="radio" name="cins"/>KADIN
                    </td>
                </tr>
            	<tr>
                	<td>RENK:</td>
                    <td><input type="color" name="renk" /></td>
                </tr>
            	<tr>
                	<td>E-Mail:</td>
                    <td><input type="email" name="email" /></td>
                </tr>
            	<tr>
                	<td>HOBİLERİNİZ:</td>
                    <td>
                    	<input type="checkbox" value="Spor" name="hobi[]" />Spor<br />
                        <input type="checkbox" value="Oyun" name="hobi[]" />Oyun<br />
                        <input type="checkbox" value="Bisiklet" name="hobi[]" />Bisiklet<br />
                        <input type="checkbox" value="Yemek" name="hobi[]" />Yemek<br />
                    </td>
                </tr>
            	<tr>
                	<td>UĞRAŞ:</td>
                    <td><input type="range" name="ugras" step="5" /></td>
                </tr>
            	<tr>
                	<td>Doğum Yeriniz:</td>
                    <td>
                    	<select name="dogyer">
                        	<optgroup label="BATI">
                        		<option value="34">İSTANBUL</option>
                            		<option value="35">İZMİR</option>
                        		<option value="16">BURSA</option>
                        	</optgroup>
                        	<optgroup label="DOĞU">
                        		<option value="47">MUŞ</option>
                        		<option value="36">KARS</option>
                        		<option value="19">DİYARBAKIR</option>
                        		<option value="19">MARDİN</option>
                            </optgroup>
                    </td>
                </tr>
                
            	<tr>
                	<td>
                    	<button><img src="../11kasım3061/img/Koala.jpg" /><br />kaydet</button></td>
                    <td>
                    	<input type="submit" name="btn" value="GÖNDER" />
                    	<input type="reset" name="reset" value="SİL" />
                    </td>
                </tr>
            </table>
		</form>
	</body>
</html>