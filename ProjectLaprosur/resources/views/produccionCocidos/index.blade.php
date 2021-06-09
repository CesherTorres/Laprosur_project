@extends('layouts.plantilla')
@section('title','Index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1 align="center">REGISTRO DE PRODUCCION COCIDO</h1>
        <hr width=90%  align="center" style="background-color: black">
        <br>
        <div class="col-8">
            <form action="">
                <div class="form-group row">
                    <br>
                    <div class="form-group col-12">
                        <div class="form-group col-12">
                            <label for="pampa" class="control-label col-5">PAMPA :</label>
                            <select class="custom-select col-6" id="pampa" name="pampa">
                                <option selected>Escoja una opción</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select> 
                        </div>
                        <div class="form-group col-12">
                            <label for="placa" class="control-label col-5">PLACA :</label>
                            <select class="custom-select col-6" id="placa" name="placa">
                                <option selected>Escoja una opción</option>
                                <option value="AVS-890">AVS-890</option>
                                <option value="ABJ-826">ABJ-826</option>
                                <option value="B0L-768">B0L-768</option>
                                <option value="BCK-885">BCK-885</option>
                                <option value="AKW-775">AKW-775</option>
                                <option value="C8D-844">C8D-844</option>
                            </select> 
                        </div>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">TIPO DE LADRILLOS :</label>
                            <select class="custom-select col-8" id="tipoLadrillo" name="tipoLadrillo">
                                <option selected>Escoja una opción</option>
                                <option value="KK 18 ECONOMICO">KK 18 ECONOMICO</option>
                                <option value="KK 18 SIMPLE">KK 18 SIMPLE</option>
                                <option value="KK 18 MANO">KK 18 MANO</option>
                                <option value="KK 18 INFES">KK 18 INFES</option>
                                <option value="TECHO 20 X 30 X 30">TECHO 20 X 30 X 30</option>
                                <option value="TECHO 15 X 30 X 30">TECHO 15 X 30 X 30</option>
                                <option value="TECHO 12 X 30 X 30">TECHO 12 X 30 X 30</option>
                                <option value="TECHO 08 X 30 X 30">TECHO 08 X 30 X 30</option>
                                <option value="PANDERETA ACANALADA">PANDERETA ACANALADA</option>
                         </select>  
                        </div>  
                        <div class="form-grup col-12">
                            <label for="cantidadLadrillos" class="control-label col-3">CANTIDAD :</label>
                            <input type="input" name="cantidadLadrillos" id="cantidadLadrillos" class="col-8" placeholder="Ingrese la cantidad de ladrillos que se han producido">
                        </div>                        
                    </div>
                    <div class="container">
                        <h3 align="center">Hornos</h3>
                        <br>
                        <div class="row justify-content-md-center">
                            <div class="form-group col-8">
                                <div class="form-group col-12">
                                    <label for="horno" class="control-label col-5">HORNO :</label>
                                    <select class="custom-select col-6" id="horno">
                                        <option selected>Escoja una opción</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group col-8">
                                <div class="form-group col-12">
                                    <label for="horno" class="control-label col-5">CACHAMADA :</label>
                                    <select class="custom-select col-6" id="horno">
                                        <option selected>Escoja una opción</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                    </select> 
                                </div>
                            </div>                            
                            <div class="form-group col-8">
                                <div class="form-group col-12">
                                    <label for="quema" class="control-label col-5">N° DE QUEMA :</label>
                                    <select class="custom-select col-6" id="quema">
                                        <option selected>Escoja una opción</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>                        
                            </div>    
                        </div>
                    </div>
                    <br>

                </div>                
                
                <div class="row justify-content-md-center">
                    <div class="align-self-center">
                        <input type="button"  class="btn btn-primary " value="REGISTRAR">
                        <input type="button"  class="btn btn-primary " value="CANCELAR">
                    </div>
                    <br>                
                <div>
            </form>
        </div>
    </div>    
</div>
@endsection
