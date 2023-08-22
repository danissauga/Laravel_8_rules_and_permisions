<!DOCTYPE html>
<html>
<head>
    <title>Laravel Contact US Form Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
    .custom-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #dee2e6;
    }

    .custom-table th,
    .custom-table td {
        padding: 8px;
        text-align: center;
        vertical-align: middle;
        border-bottom: 1px solid #DDDDDD;
    }

    .custom-table th {
        background-color: #f8f9fa;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      border-radius: 0.25rem;
      background-color: #fff;
    }

    .card-body {
      padding: 1rem;
    }
</style>

</head>
<body>
<div class="container">
       
        <div class="card">
            <div class="card-body">
                    
                    <h2 >Sveiki,</h2>
                    
                 <p> Norime Jums priminti apie artėjantį planuojamą kopėčių patikrinimą, kuris yra labai svarbus Jūsų įmonės darbų saugumui.</p>   <br>
                 <p>Patikrinimas bus atliekamas artimiausiu metu, o tai reiškia, kad greitai mums prireiks prieigų prie visų kopėčių.
                 Norėtume paprašyti pasirūpinti, kad visos kopėčios būtų pasiekiamos ir lengvai prieinamos mūsų komandai.
                 Tai padės mums užtikrinti patikrinimo sklandumą ir efektyvumą.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
               <table class="custom-table" >
                   <tr>
                       <th>Eil. Nr.</th>
                       <th>Įmonės pavadinimas</th>
                       <th>Artėjančių patikrų skaičius</th>
                   </tr>
        @foreach ($products as $product)
                   <tr>
                       <td>{{ $product->id}}</td>
                       <td>{{ $product->name}}</td>
                       <td>{{ $product->detail}}</td>
                   </tr>
        @endforeach
               </table>
               <p> Jei turite kokių nors klausimų ar pageidaujate sužinoti daugiau informacijos apie patikrinimo datą ir laiką, nedvejokite ir susisiekite su mumis.
               Mes visada pasiruošę padėti ir atsakyti į  klausimus. Ačiū už supratingumą ir bendradarbiavimą. </p>
               <p>UAB DANIS SAUGA</p>
            </div>
        </div>

</div>
</body>
</html>