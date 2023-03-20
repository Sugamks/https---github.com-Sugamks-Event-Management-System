<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </link>
        <style>
          body{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: 300% 300%;
            background-image: linear-gradient(
                  -45deg, 
                  rgba(59,173,227,1) 0%, 
                  rgba(87,111,230,1) 25%, 
                  rgba(152,68,183,1) 51%, 
                  rgba(255,53,127,1) 100%
            );  
            animation: AnimateBG 20s ease infinite;
        }

        @keyframes AnimateBG { 
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
        }
            .container {
                margin-top: 100px;
                border: 5px solid black;
                padding: 30px;
                width: 500px;
                margin-left: 35%;
                font-style: normal;
            }  
            a{
              color: black;
            }
          .btn:hover {
            opacity: 0.5;
            }
            .text-danger{
                font-weight: normal;
            }
            .row{
                font-weight: normal;
            }
        </style>
    </head>
    <body>
        <div class="container" style="background-color: whitesmoke;">
        <h1 style="text-align: center;" >Login</h1>
            <?php echo form_open('Workers/succheck'); ?>
                <div class="row">
                    <label for="uname"><b>Username</b></label>
                    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
                    <?php echo form_error('uname',"<div class='text-danger'>","</div>") ?>
                </div>
                <div class="row">
                    <label for="psw"><b>Password</b></label>
                    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass']) ?>
                    <?php echo form_error('pass',"<div class='text-danger'>","</div>") ?>
                </div>
            <br>
            <?php echo form_submit(['class'=>'btn btn-outline-dark','type'=>'submit','value'=>'Submit']) ?>
            <?php echo form_reset(['class'=>'btn btn-outline-dark','type'=>'reset','value'=>'Reset']) ?>
            <br>
            <a href="http://localhost/mini/workers/reg">New here?Register now</a>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
    