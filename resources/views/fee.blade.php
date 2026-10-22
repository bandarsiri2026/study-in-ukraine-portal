@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 feePage">
                <h2 class="text-center">{{trans('main.fee')}}</h2>
                <p>{!!trans('main.feePage')!!}</p>
            </div>
        </div>
        <div class="col-md-12 offset-md-1 tableFee ">
          <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">{{trans('main.courses')}}</th>
                <th scope="col">{{trans('main.englishLang')}}</th>
                <th scope="col">{{trans('main.russianLang')}}</th>
                <th scope="col">{{trans('main.duration')}}</th>
                <th scope="col">{{trans('main.diplome')}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{trans('main.medecine')}}</th>
              <td>4800$</td>
              <td>4000$</td>
              <td>6 {{trans('main.years')}}</td>
              <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.pharmacy')}}</th>
                <td>4900$</td>
                <td>4300$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Dentistry')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.PetroleumEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.PetroleumEconomicst')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.ComputerScience')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.SoftwareEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.CyberSecurity')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.MechanicalEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.BiomedicalEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.AutomobileEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.ComputerEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.InternationalLaw')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.InternationalEconomics')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.BusinessManagement')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.InternationalBusiness')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Architecture')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.ElectricalEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Mathematics')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.PhysicalTechnology')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Biology')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Biotechnology')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Psychology')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Chemistry')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.HistoryArchaeology')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.ForeignLanguages')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.CivilEngineering')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Aviation')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>
            <tr>
                <th scope="row">{{trans('main.Telecommunication')}}</th>
                <td>4400$</td>
                <td>4000$</td>
                <td>6 {{trans('main.years')}}</td>
                <td>{{trans('main.master')}}</td>
            </tr>


          </tbody>
        </table>

        </div>
    </div>
@endsection
