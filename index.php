<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "stiker1.gif",
    ucapan: "HAPPY VALENTINES BABEE:3",
  },
  {
    gambar: "stiker2.gif",
    ucapan: "Sayangggʕ⁠っ⁠•⁠ᴥ⁠•⁠ʔ⁠っ",
  },
  {
    gambar: "stiker1.gif",
    ucapan: "Marr Sayangg Bangett Samaa Piaaa tauuu,piaaa sayangg marr ndaaa?marr sayangg bangett samaa piaaaa<3",
  },
  {
    gambar: "stiker3.gif",
    ucapan: "Marr janjii bakall sayangg teruss samaa piaaa,marr bakall jagaa piaaa sampee nafas terakhir marr:3",
  },
  {
    gambar: "stiker1.gif",
    ucapan: "Marr sayanggg piaaaa,i loveeee youuu soo muchh babee:3",
  },
];

musik = "musik.mp3";
noWhatsapp = "6289527554125";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>
