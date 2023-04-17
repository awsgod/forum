<!DOCTYPE html>
<html>
<head>
	<title>Rejestracja</title>
</head>
<style>
header {
      background-color: rgba(14, 42, 71, 1);
      color: #fff;
      display: flex;
      border-radius: 20vh;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      border-bottom: black;
      margin-top: 15px;
      position: fixed;
      top: 0;
      width: 90%;
      z-index: 1;
    }
 
    nav {
      display: flex;
      justify-content: center;
      align-items: center;
    }
 
    nav a {
      background-color: #1C538E;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      margin-right: 20px;
      font-size: 18px;
      border-radius: 10px;
    }
 
    nav a:hover {
      background-color: #fff;
      color: #333;
      border-radius: 10px;
    }
    /* body style */
body {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1762%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='url(%23SvgjsLinearGradient1763)'%3e%3c/rect%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='0' y='720'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='720' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='720' y='720'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='1440' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='1440' y='720'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1762'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='10.94%25' y1='119.44%25' x2='89.06%25' y2='-19.44%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1763'%3e%3cstop stop-color='rgba(14%2c 42%2c 71%2c 1)' offset='0.18'%3e%3c/stop%3e%3cstop stop-color='rgba(0%2c 69%2c 158%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1769'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1764'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1768'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1765'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1767'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1766'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1770'%3e%3cuse xlink:href='%23SvgjsPath1764' x='30' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='30' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='30' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='30' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='30' y='270' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='30' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='30' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='30' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='90' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='90' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='90' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='210' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='210' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='210' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='210' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='270' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='270' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='330' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='330' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='330' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='330' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='390' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='330' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='570' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='630' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='330' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='390' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='390' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='390' y='270' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='390' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='390' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='390' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='390' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='450' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='450' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='450' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='450' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='450' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='450' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='450' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='510' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='510' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='510' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='510' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='510' y='510' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='570' y='330' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='570' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='630' y='150' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='630' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='630' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='630' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='630' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='630' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='690' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='690' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='690' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='690' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='690' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='690' y='690' stroke='%231c538e'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
  background-repeat: no-repeat;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  
}

/* Resetowanie stylów domyślnych */


/* Stylowanie nagłówka */
h2 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
  color: #333;
  text-align: center;
}

/* Stylowanie kontenera formularza */
.form-container {
  display: flex;
  flex-direction: column;
  width: 80%;
  margin: 0 auto;
  max-width: 500px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1762%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='url(%23SvgjsLinearGradient1763)'%3e%3c/rect%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='0' y='720'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='720' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='720' y='720'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='1440' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1770' x='1440' y='720'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1762'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='10.94%25' y1='119.44%25' x2='89.06%25' y2='-19.44%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1763'%3e%3cstop stop-color='rgba(14%2c 42%2c 71%2c 1)' offset='0.18'%3e%3c/stop%3e%3cstop stop-color='rgba(0%2c 69%2c 158%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1769'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1764'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1768'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1765'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1767'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1766'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1770'%3e%3cuse xlink:href='%23SvgjsPath1764' x='30' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='30' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='30' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='30' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='30' y='270' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='30' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='30' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='30' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='30' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='90' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='90' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='90' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='90' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='90' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='90' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='150' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='150' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='210' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='210' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='210' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='210' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='210' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='210' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='270' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='270' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='270' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='270' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='330' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='330' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='330' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='330' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='390' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='330' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='330' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='570' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='330' y='630' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='330' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='390' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='390' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='390' y='270' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='390' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='390' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='390' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='390' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='390' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='450' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='450' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='450' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='450' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='450' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='450' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='450' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='450' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='510' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='510' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='510' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='510' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='510' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='510' y='510' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='510' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='570' y='330' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='570' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='570' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='570' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1766' x='630' y='150' stroke='%231c538e' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='630' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='630' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='630' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='630' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='630' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='630' y='690' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='690' y='30' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='690' y='90' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1764' x='690' y='150' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='210' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='270' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='330' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='690' y='390' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='450' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1765' x='690' y='510' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1769' x='690' y='570' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1767' x='690' y='630' stroke='%231c538e'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1768' x='690' y='690' stroke='%231c538e'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
  border-radius: 5px;
  padding: 1rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Stylowanie formularza */
form {
  display: flex;
  flex-direction: column;
}

/* Stylowanie etykiet */
label {
  font-size: 1.1rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
  color: #333;
}

/* Stylowanie pól formularza */
input[type="text"],
input[type="password"] {
  font-size: 1.1rem;
  padding: 0.5rem;
  border: none;
  border-radius: 5px;
  margin-bottom: 1rem;
  background-color: #eee;
  color: #333;
}

/* Stylowanie przycisku */
input[type="submit"] {
  font-size: 1.1rem;
  font-weight: bold;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 5px;
  background-color: #333;
  color: #fff;
  cursor: pointer;
}

/* Stylowanie linku */
a {
  font-size: 1.1rem;
  margin-top: 1rem;
  color: #333;
  text-decoration: none;
  text-align: center;
  transition: color 0.3s ease-in-out;
}

a:hover {
  color: green;
}
</style>

<body>
<header>
    <h1>Strona Główna</h1>
    <nav>
      <a href="loguj.php">Logowanie</a>
      <a href="rejestr.php">Rejestracja</a>
      <a href="gra.php">Gra</a>
    </nav>
  </header>

	<?php
	// połączenie z bazą danych
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	// obsługa formularza rejestracji
	if(isset($_POST['register'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users (login, password, registration_date)
		VALUES ('$login', '$password', NOW())";

		if (mysqli_query($conn, $sql)) {
			echo "Rejestracja przebiegła pomyślnie!";
		} else {
			echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($conn);
	?>


<div class="form-container">
  <h2>Rejestracja</h2>
  <form method="post" action="">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login"><br>
    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password"><br>
    <a href="loguj.php">Mam konto. Zaloguj mnie</a> <br>
    <input type="submit" name="register" value="Zarejestruj">
  </form>
</div>
<script>
    // JS umożliwiający płynne przewijanie do sekcji
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
 
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>
