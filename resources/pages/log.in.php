<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Log in</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    </head>
    
    <body>
        <div class="container well">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-horizontal" action='' method="POST">
                  <fieldset>
                    <div id="legend">
                      <legend class="">LOG IN</legend>
                    </div>
                    <div class="control-group">
                      <!-- E-mail -->
                      <label class="control-label" for="email">E-mail</label>
                      <div class="controls">
                        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                        <p class="help-block"></p>
                      </div>
                    </div>
                 
                    <div class="control-group">
                      <!-- Password-->
                      <label class="control-label" for="password">Password</label>
                      <div class="controls">
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                        <p class="help-block"></p>
                      </div>
                    </div>
                 
                    <div class="control-group">
                      <!-- Button -->
                      <div class="controls">
                        <button class="btn btn-success">Log in</button>
                        <a class="btn btn-info" href="/resources/" role="button">Back</a>
                      </div>
                    </div>
                  </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>