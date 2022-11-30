@extends('layouts.app')

@section('content')
<br><br><br>
<div class='container'>
  
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2 style="color:#FFFFFF">  Speed Racer</h2>
        <div class="imagen_auto" >
        <br><br><br>
         <img src="/comprarImagenAuto/{{$auto->rutafoto}}"> 
          <br><br>
          <div class="caracteristicas-auto">
          MARCA  :   {{$auto->Marca}}<br> 
          MODELO :  {{$auto->Modelo}}<br>
          PRECIO :  ${{$auto->Precio}} <br>
          </div>
          
        </div>
</div>
</div>
        <div class='credit-info'> 
          <div class='credit-info-content'>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            <br><br><br>
            <table class='half-input-table'>
              <tr><td>Estado: </td><td><div class='dropdown' id='card-dropdown'><select name="estado" class='dropdown-btn' id='op' style="color:#F6ECE1">
                    <option>Nuevo</option>
                    <option>SemiNuevo</option>
                    <option>Reparado</option>
                    <option>Tuneado</option>
                  </select>
                </div>
               </td></tr>
            </table>
            <table class='half-input-table'>
            <br><br><br>
              <tr>
              <table class='half-input-table'>
              <tr><td>Forma de Pago: </td><td><div class='dropdown' id='card-dropdown'><select name="pago" class='dropdown-btn' id='op' style="color:#F6ECE1">
                    <option>Efectivo</option>
                    <option>Cuotas</option>
                    <option>Tarjeta</option>
                  </select>
               </td></tr>
            </table>
              </tr>
            </table>
            <button class='pay-btn'><a href="{{ url('/') }}"> VALIDAR COMPRA </a></button>

          </div>

        </div>
      </div>
</div>

<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

/* #subrayado de enalaces */
a:link, a:visited, a:active {
  text-decoration:none;
  color: aliceblue;
  }

body,html {
  height:100%;
  margin:0;
  font-family:lato;
}

h2 {
  color: black;
  margin-bottom:0px;
  margin-top:25px;
  text-align:center;
  font-weight:200;
  font-size:19px;
  font-size:1.2rem;
  
}
.container {
  background-image: url("https://c4.wallpaperflare.com/wallpaper/460/879/592/sunset-bmw-tuning-bmw-wallpaper-preview.jpg");
  border-radius: 20px;
  height:100%;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
}
/* caracteristicas al comprar */
.caracteristicas-auto{
  font-size: 20px;
  text-align: center;
  
}
.dropdown-select.visible {
  display:block;
}
.dropdown {
  position:relative;
}
ul {
  margin:0;
  padding:0;
}
ul li {
  list-style:none;
  padding-left:10px;
  cursor:pointer;
}
ul li:hover {
  background:rgba(255,255,255,0.1);
}
.dropdown-select {
  position:absolute;
  background:#77aaee;
  text-align:left;
  box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
  border-bottom-right-radius:5px;
  border-bottom-left-radius:5px;
  width:90%;
  left:2px;
  line-height:2em;
  margin-top:2px;
  box-sizing:border-box;
}
.thin {
  font-weight:400;
}
.small {
  font-size:12px;
  font-size:.8rem;
}
.half-input-table {
  border-collapse:collapse;
  width:100%;
}
.half-input-table td:first-of-type {
  border-right:10px solid #4488dd;
  width:50%;
}
.window {
  height:540px;
  width:800px;
  background:black;
  opacity: 0.8;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}
.order-info {
  height:100%;
  width:50%;
  padding-left:25px;
  padding-right:25px;
  box-sizing:border-box;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  position:relative;
}
.price {
  bottom:0px;
  position:absolute;
  right:0px;
  color:#4488dd;
}
.order-table td:first-of-type {
  width:25%;
}
.order-table {
    position:relative;
}
.line {
  height:1px;
  width:100%;
  margin-top:10px;
  margin-bottom:10px;
  background:#ddd;
}
.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;
}
.order-info-content {
  table-layout:fixed;

}

.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:black;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:whitesmoke;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.pay-btn:hover {
  background:orange;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.total {
  margin-top:25px;
  font-size:20px;
  font-size:1.3rem;
  position:absolute;
  bottom:30px;
  right:27px;
  left:35px;
}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}
.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.credit-info {
  background:black;
  opacity: 1;
  height:100%;
  width:50%;
  color:#eee;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
}
.dropdown-btn {
  background:rgba(255,255,255,0.1);
  width:100%;
  border-radius:5px;
  text-align:center;
  line-height:1.5em;
  cursor:pointer;
  position:relative;
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-btn:after {
  content: '\25BE';
  right:8px;
  position:absolute;
}
.dropdown-btn:hover {
  background:rgba(255,255,255,0.2);
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-select {
  display:none;
}
.credit-card-image {
  display:block;
  max-height:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:35px;
  margin-bottom:15px;
}
.credit-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:100%;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .credit-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .pay-btn {
    border-radius:0px;
  }
}
#op{
  background-color: black;
}

</style>
@endsection