<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project Report</title>
    {{-- <link rel="stylesheet" href="{{asset('invoice/style.css')}}" media="all" /> --}}
    <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
  border-bottom: 2px solid black;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  margin: 0 0 20px 0;
  font-weight: bold;
  background: url(dimension.png);
}

#project {
  float: left;
  font-weight: bold;
}

#project span {
  color: #5D6975;
  text-align: left;
  width: 52px;
  margin-right: 4rem;
  display: inline-block;
  font-size: 0.8em;
  font-weight: bold;
}

#company {
  float: right;
  margin-right: 1rem;
  text-align: left;
}

#company span {
  color: #5D6975;
  text-align: left;
  width: 52px;
  margin-right: 2rem;
  display: inline-block;
  font-size: 0.8em;
  font-weight: bold;
}

#company div {
  text-align: left;
}

#project div,
#company div {
  white-space: nowrap;  


}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: left;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: bold;
  color: black;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: left;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: relative;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        {{-- <img src="{{asset('invoice/logo.png')}}"> --}}
      </div>
      <h1 style="background-color: #cbe3fa; padding-left: 1rem; padding-right: 1rem;">X and C Building Construction

        <span style="font-size: 12px;
        float: right;
        line-height: 1rem;
        width: 6rem;
        margin-top: 0.3rem;
        text-align: right;
        margin-right: 1rem;
        font-weight: 600;">{{$timeToday}}</span>
      </h1>
      <h2
      style="color: #5c666e;
      text-align: center;
      text-transform:uppercase;
      text-decoration: underline;
      "
      >Project Report</h2>
      
      <div id="company" class="clearfix" style="font-weight: bold;">
        <div><span>COMPANY NAME</span> :{{$project->client->company_name}}</div>
        <div><span>OWNER</span> :{{$project->client->owner_name}}</div>
      </div>
      <div id="project">
        <div><span>PROJECT NAME</span> :{{$project->project_name}}</div>
        <div><span>PROJECT DURATION</span> :{{$project->project_start}} - {{$purchases[0]->project->project_ETA}}</div>
        <div><span>BUDGET ALLOCATION</span> :{{$project->project_budget}}</div>
      </div>
    </header>
    <main>
      @if (count($funds))
      <h3>Recieve Funds</h3>
      <table style="width: 70%;">
        <thead>
          <tr style="font-weight: bold;">
            <th>Date</th>
            <th>Reference Number</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($funds as $fund)
            <tr>
            <td>{{date('F d, Y', strtotime($fund->created_at))}}</td>
            <td>45234534</td>
            <td>PHP {{$fund->amount}}</td>
            </tr>
            @endforeach
          <tr style=" font-weight: bold; ">
            <td colspan="2" style="text-align: right;">TOTAL FUNDS RECIEVE: </td>
            <td style="border-top: 2px solid black;">PHP {{$totalFunds}}</td>
          </tr>
        </tbody>
      </table>
      @endif
      
      @if (count($purchases) > 0)
      <h3 style="border-top: 2px solid #000; padding-top: 0.5rem;">Expenses</h3>
      <table style="width: 100%;  border-bottom: 2px solid; ">
        <thead>
          <tr style="font-weight: bold;">
            <th>Date</th>
            <th>OR #</th>
            <th>Specifications</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($purchases as $purchase)
          <tr>
            <td>{{date('F d, Y', strtotime($purchase->transaction_date))}}</td>
            <td>{{$purchase->OR_Number}}</td>
            <td>{{$purchase->description}}</td>
            <td>PHP {{$purchase->amount}}</td>
          </tr>
          @endforeach
          <tr style=" font-weight: bold; ">
            <td colspan="3" style="text-align: right;">TOTAL EXPENSES: </td>
            <td style="border-top: 2px solid black;">PHP {{$totalExpenses}}</td>
          </tr>
        </tbody>
      </table>
      @endif

      <table style="width: 50%;">
        <tbody>
          <tr>
            <td>TOTAL FUNDS RECIEVE</td>
            <td>PHP {{$totalFunds}}</td>
          </tr>
          <tr>
            <td>TOTAL EXPENSES</td>
            <td>PHP {{$totalExpenses}}</td>
          </tr>
          <tr style=" font-weight: bold; ">
            <td style="text-align: left;">PROFIT: </td>
            <td style="">PHP {{$totalFunds + $totalExpenses}}</td>
          </tr>
        </tbody>
      </table>
      <hr style="border: 2px solid #000;">
        </div>
    </main>
    <div style="display: flex; margin-bottom: 2rem;">
      <table>
        <tr>
          <td>Prepared by:</td>
          <td>
            Validated by:
          </td>
        </tr>
        <tr>
          <td>
            <div style="width: 50%; margin: auto;">
              <p style="border-bottom: 2px solid #000;
              text-align: center;
              margin: 0;
              font-size: 15px;
              font-weight: bolder;">{{$projectManager[0]->name}}</p>
              <p style="text-align: center; margin: 0;">Project Manager</p>
            </div>
          </td>
          <td>
            <div style="width: 50%; margin: auto;">
              <p style="border-bottom: 2px solid #000;
              text-align: center;
              margin: 0;
              font-size: 15px;
              font-weight: bolder;">{{$projectSupervisor[0]->name}}</p>
              <p style="text-align: center; margin: 0;">Project Supervisor</p>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <footer>
      Page 1 of 1
    </footer>
  </body>
</html>