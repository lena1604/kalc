<html>
<head>
<title>ШафиКупе</title>
<script lang="JavaScript">

function calculator() 
{
shyryna=eval(form.shyryna.value);
hlybyna=eval(form.hlybyna.value);
vysota=eval(form.vysota.value);
sekcii=eval(form.sekcii.value);
polyci=eval(form.polyci.value);
bez_pidlohy=eval(form.bez_pidlohy.value);
bez_kryshky=eval(form.bez_kryshky.value);
bez_l_stinky=eval(form.bez_l_stinky.value);
bez_p_stinky=eval(form.bez_p_stinky.value);
rezult=(shyryna+hlybyna+vysota)*(sekcii+sekcii);
form.total.value = rezult
}
</script>
</head>

<body>
<form name=form>
<h2>Розрахунок вартості шафи-купе</h2>
<label for="width">Ширина<input type="text" name="shyryna" onchange="this.value=this.value.replace(/([^0-9])/g,'');" onkeyup="var n=this.value.replace(/([^0-9])/g,''); if(n!=this.value) this.value=n;"</label>мм.</div>
<div class="deep">Глибина<input type="text" name="hlybyna" onchange="this.value=this.value.replace(/([^0-9])/g,'');" onkeyup="var n=this.value.replace(/([^0-9])/g,''); if(n!=this.value) this.value=n;">мм.</div>
<div class="height">Висота<input type="text" name="vysota" onchange="this.value=this.value.replace(/([^0-9])/g,'');" onkeyup="var n=this.value.replace(/([^0-9])/g,''); if(n!=this.value) this.value=n;">мм.</div>
<div class="qnt1">Кількість секцій
<span class="err"><select name="sekcii"class="small"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="err-mess"></span></span></span>
<div class="qnt2">
<label for="qnt2">Кількість полиць
<span class="err"><select name="polyci"class="small"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><span class="err-mess"></span></span></span>
</label></div>
</div>
</div>
<h3>Додаткові умови виготвлення шафи:</h3>
<div class="row"><label for="opt1"><input type="checkbox" name="bez_pidlohy" value="" id="opt1">Без підлоги</label></div>
<div class="row"><label for="opt2"><input type="checkbox" name="bez_kryshky" value="" id="opt2">Без кришки</label></div>
<div class="row"><label for="opt3"><input type="checkbox" name="bez_l_stinky" value="" id="opt3">Без лівої стінки</label></div>
<div class="row"><label for="opt4"><input type="checkbox" name="bez_p_stinky" value="" id="opt4">Без правої стінки</label></div>

<input type="button" value="Порахувати" onclick="calculator();">

<input type=reset value="Обнулити"><br>

Результат <input type="text"name=total>
</body>
</html>
