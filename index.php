<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	if($_SESSION['SESS_RANK']=='administrator'){
			header("location: admin.php");
			}
			else
			{
				header("Location: voter.php");
			}	
			
}
?>
<?php global $msg; echo $msg;?>

<head>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="styleh.css">
    <style type="text/css">


    </style>

    <title>Voting System</title>
</head>
<body>


	<header class="jumbotron">

	</header>

    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carausel">
                    <div class="carousel-inner" role="listbox">


                        <div class="carousel-item active ">
                        <div class="carousel-caption d-none d-md-block" style="color: white">
                                <h2 >DEMOCRATIC RIGHT </h2>
                                <p class="d-none d-sm-block"  >VOTING IS A DEMOCRATIC RIGHT GENERATIONS HAVE FOUGHT FOR, AND WE TAKE THAT SERIOUSLY.hey knew voting is the most basic privilege in a democratic society, and they wanted their voices – and the voices of others – to be hear.Voting is a formal expression of preference for a candidate for office or for a proposed resolution of an issue.Voting generally takes place in the context of a large-scale national or regional election, however, local and small-scale community elections can be just as critical to individual participation in government.</p>
                            </div>
                        </div>


                        <div class="carousel-item ">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Not voting is giving up your voice.</span> </h2>
                                <p class="d-none d-sm-block">Any time someone says, “One vote won’t make a difference,” or, “I don’t like any of the candidates so I’m not going to vote,” or any other excuse for not voting, that is the regrettable choice to give up a treasured right of our free society. So many have sacrificed so much over the years to create and preserve this foundational aspect of our government. It is truly a loss when we lose sight of the importance of fulfilling our hard-won civic duty.The Ruth Law Team is all about protecting your rights and helping you to get justice. In order to have that opportunity, we must all share our voice by going to the ballot box on election day. </p>

                            </div>

                        </div>

                        <div class="carousel-item ">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Voting is an opportunity for change. </h2>
                                <p class="d-none d-sm-block">“Voting is your civic duty.” Do you want to make a positive impact? Voting gives you that chance! Support the candidates and ballot measures that can help your community, state, and even the nation for the greater good. Make your voice heard in these elections. Our communities are made up of friends, loved ones, neighbors, and children. Some may not know how important voting is, while others don’t have the privilege. Make the decision to vote for yourself and those around you.  </p>
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="o" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                            <button class="btn btn-info btn-sm" id="carouselbtn">
                                <span class="fa fa-pause"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
<?php include "footer.php";?>
