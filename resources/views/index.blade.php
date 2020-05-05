<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Covid19</title>
  </head>

  <body>
      <nav>
        <div class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        
        <ul class="nav-links">
          <li class="logo">Covid19</li>
          <li class="links"><a href="/">Dashboard</a></li>
          <li class="links"><a href="#">About Us</a></li>
          <li class="links"><a href="/login">Log in</a></li>
        </ul>
      </nav>
      <div class="container my-2">
        <div class="wrapper">
            <div class="table-item">
              <table class="table table-hover">
                  <thead class="thead-dark">
                      <tr>
                        <th scope="col">Thana</th>
                        <th scope="col">Infected</th>
                        <th scope="col">New Infected</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deaths</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $item)
                      <tr>
                        <td>{{$item->thana}}</td>
                        <td>{{$item->infected}}</td>
                        <td>{{$item->new_infected}}</td>
                        <td>{{$item->recover}}</td>
                        <td>{{$item->deaths}}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <table class="table table-sm">
              <thead class="thead-dark">
                  <tr>
                    <th scope="col">Total Infected</th>
                    <th scope="col">Total Death</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td class="table-warning">{{$total_infected}}</td>
                    <td class="table-danger">{{$total_dead}}</td>
                  </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    <script src="./js/custom.js"></script>
  </body>
</html>
