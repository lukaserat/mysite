<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel 4 - Bootstrap App
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{{ asset('assets/css/bootstrap.css') }}}" rel="stylesheet">
		<link href="{{{ asset('assets/css/bootstrap-responsive.css') }}}" rel="stylesheet">

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		
		<!-- Container -->
		<div class="container">
			
			
			<!-- Typography
			================================================== -->
			<section id="typography">
			  <div class="page-header">
			    <h1>Typography</h1>
			  </div>

			  <!-- Headings & Paragraph Copy -->
			  <div class="row">

			    <div class="span4">
			      <div class="well">
			        <h1>h1. Heading 1</h1>
			        <h2>h2. Heading 2</h2>
			        <h3>h3. Heading 3</h3>
			        <h4>h4. Heading 4</h4>
			        <h5>h5. Heading 5</h5>
			        <h6>h6. Heading 6</h6>
			      </div>
			    </div>

			    <div class="span4">
			      <h3>Example body text</h3>
			      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
			    </div>

			    <div class="span4">
			      <h3>Example addresses</h3>
			      <address>
			        <strong>Twitter, Inc.</strong><br>
			        795 Folsom Ave, Suite 600<br>
			        San Francisco, CA 94107<br>
			        <abbr title="Phone">P:</abbr> (123) 456-7890
			      </address>
			      <address>
			        <strong>Full Name</strong><br>
			        <a href="mailto:#">first.last@gmail.com</a>
			      </address>
			    </div>

			  </div>
			  
			  <div class="row">
			    <div class="span6">
			      <blockquote>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
			      </blockquote>
			    </div>
			    <div class="span6">
			      <blockquote class="pull-right">
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
			      </blockquote>
			    </div>
			  </div>

			</section>


			<!-- Navbar
			================================================== -->
			<section id="navbar">
			  <div class="page-header">
			    <h1>Navbars</h1>
			  </div>
			  
			  <div class="navbar">
			    <div class="navbar-inner">
			      <div class="container" style="width: auto;">
			        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </a>
			        <a class="brand" href="#">Project name</a>
			        <div class="nav-collapse">
			          <ul class="nav">
			            <li class="active"><a href="#">Home</a></li>
			            <li><a href="#">Link</a></li>
			            <li><a href="#">Link</a></li>
			            <li><a href="#">Link</a></li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li class="divider"></li>
			                <li><a href="#">Separated link</a></li>
			              </ul>
			            </li>
			          </ul>
			          <form class="navbar-search pull-left" action="">
			            <input type="text" class="search-query span2" placeholder="Search">
			          </form>
			          <ul class="nav pull-right">
			            <li><a href="#">Link</a></li>
			            <li class="divider-vertical"></li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li class="divider"></li>
			                <li><a href="#">Separated link</a></li>
			              </ul>
			            </li>
			          </ul>
			        </div><!-- /.nav-collapse -->
			      </div>
			    </div><!-- /navbar-inner -->
			  </div><!-- /navbar -->

			  <div class="navbar navbar-inverse">
			    <div class="navbar-inner">
			      <div class="container" style="width: auto;">
			        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </a>
			        <a class="brand" href="#">Project name</a>
			        <div class="nav-collapse">
			          <ul class="nav">
			            <li class="active"><a href="#">Home</a></li>
			            <li><a href="#">Link</a></li>
			            <li><a href="#">Link</a></li>
			            <li><a href="#">Link</a></li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li class="divider"></li>
			                <li><a href="#">Separated link</a></li>
			              </ul>
			            </li>
			          </ul>
			          <form class="navbar-search pull-left" action="">
			            <input type="text" class="search-query span2" placeholder="Search">
			          </form>
			          <ul class="nav pull-right">
			            <li><a href="#">Link</a></li>
			            <li class="divider-vertical"></li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li class="divider"></li>
			                <li><a href="#">Separated link</a></li>
			              </ul>
			            </li>
			          </ul>
			        </div><!-- /.nav-collapse -->
			      </div>
			    </div><!-- /navbar-inner -->
			  </div><!-- /navbar -->

			</section>



			<!-- Buttons
			================================================== -->
			<section id="buttons">
			  <div class="page-header">
			    <h1>Buttons</h1>
			  </div>
			  <table class="table table-bordered table-striped">
			    <thead>
			      <tr>
			        <th>Button</th>
			        <th>Large Button</th>
			        <th>Small Button</th>
			        <th>Disabled Button</th>
					<th>Button with Icon</th>
					<th>Split Button</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td><a class="btn" href="#">Default</a></td>
			        <td><a class="btn btn-large" href="#">Default</a></td>
			        <td><a class="btn btn-small" href="#">Default</a></td>
			        <td><a class="btn disabled" href="#">Default</a></td>
			        <td><a class="btn" href="#"><i class="icon-cog"></i> Default</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn" href="#">Default</a>
				          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-primary" href="#">Primary</a></td>
			        <td><a class="btn btn-primary btn-large" href="#">Primary</a></td>
			        <td><a class="btn btn-primary btn-small" href="#">Primary</a></td>
			        <td><a class="btn btn-primary disabled" href="#">Primary</a></td>
			        <td><a class="btn btn-primary" href="#"><i class="icon-shopping-cart icon-white"></i> Primary</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-primary" href="#">Primary</a>
				          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-info" href="#">Info</a></td>
			        <td><a class="btn btn-info btn-large" href="#">Info</a></td>
			        <td><a class="btn btn-info btn-small" href="#">Info</a></td>
			        <td><a class="btn btn-info disabled" href="#">Info</a></td>
			        <td><a class="btn btn-info" href="#"><i class="icon-exclamation-sign icon-white"></i> Info</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-info" href="#">Info</a>
				          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-success" href="#">Success</a></td>
			        <td><a class="btn btn-success btn-large" href="#">Success</a></td>
			        <td><a class="btn btn-success btn-small" href="#">Success</a></td>
			        <td><a class="btn btn-success disabled" href="#">Success</a></td>
			        <td><a class="btn btn-success" href="#"><i class="icon-ok icon-white"></i> Success</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-success" href="#">Success</a>
				          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-warning" href="#">Warning</a></td>
			        <td><a class="btn btn-warning btn-large" href="#">Warning</a></td>
			        <td><a class="btn btn-warning btn-small" href="#">Warning</a></td>
			        <td><a class="btn btn-warning disabled" href="#">Warning</a></td>
			        <td><a class="btn btn-warning" href="#"><i class="icon-warning-sign icon-white"></i> Warning</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-warning" href="#">Warning</a>
				          <a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-danger" href="#">Danger</a></td>
			        <td><a class="btn btn-danger btn-large" href="#">Danger</a></td>
			        <td><a class="btn btn-danger btn-small" href="#">Danger</a></td>
			        <td><a class="btn btn-danger disabled" href="#">Danger</a></td>
			        <td><a class="btn btn-danger" href="#"><i class="icon-remove icon-white"></i> Danger</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-danger" href="#">Danger</a>
				          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			      <tr>
			        <td><a class="btn btn-inverse" href="#">Inverse</a></td>
			        <td><a class="btn btn-inverse btn-large" href="#">Inverse</a></td>
			        <td><a class="btn btn-inverse btn-small" href="#">Inverse</a></td>
			        <td><a class="btn btn-inverse disabled" href="#">Inverse</a></td>
			        <td><a class="btn btn-inverse" href="#"><i class="icon-random icon-white"></i> Inverse</a></td>
					<td>
				        <div class="btn-group">
				          <a class="btn btn-inverse" href="#">Inverse</a>
				          <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </div><!-- /btn-group -->
					</td>
			      </tr>
			    </tbody>
			  </table>

			</section>


			<!-- Forms
			================================================== -->
			<section id="forms">
			  <div class="page-header">
			    <h1>Forms</h1>
			  </div>

			  <div class="row">
			    <div class="span10 offset1">

				    <form class="well form-search">
				      <input type="text" class="input-medium search-query">
				      <button type="submit" class="btn">Search</button>
				    </form>

			        <form class="well form-search">
			          <input type="text" class="input-small" placeholder="Email">
			          <input type="password" class="input-small" placeholder="Password">
			          <button type="submit" class="btn">Go</button>
			        </form>


			      <form class="form-horizontal well">
			        <fieldset>
			          <legend>Controls Bootstrap supports</legend>
			          <div class="control-group">
			            <label class="control-label" for="input01">Text input</label>
			            <div class="controls">
			              <input type="text" class="input-xlarge" id="input01">
			              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="optionsCheckbox">Checkbox</label>
			            <div class="controls">
			              <label class="checkbox">
			                <input type="checkbox" id="optionsCheckbox" value="option1">
			                Option one is this and that&mdash;be sure to include why it's great
			              </label>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="select01">Select list</label>
			            <div class="controls">
			              <select id="select01">
			                <option>something</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="multiSelect">Multicon-select</label>
			            <div class="controls">
			              <select multiple="multiple" id="multiSelect">
			                <option>1</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="fileInput">File input</label>
			            <div class="controls">
			              <input class="input-file" id="fileInput" type="file">
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="textarea">Textarea</label>
			            <div class="controls">
			              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="focusedInput">Focused input</label>
			            <div class="controls">
			              <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…">
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label">Uneditable input</label>
			            <div class="controls">
			              <span class="input-xlarge uneditable-input">Some value here</span>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="disabledInput">Disabled input</label>
			            <div class="controls">
			              <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
			            <div class="controls">
			              <label class="checkbox">
			                <input type="checkbox" id="optionsCheckbox2" value="option1" disabled>
			                This is a disabled checkbox
			              </label>
			            </div>
			          </div>
			          <div class="control-group warning">
			            <label class="control-label" for="inputWarning">Input with warning</label>
			            <div class="controls">
			              <input type="text" id="inputWarning">
			              <span class="help-inline">Something may have gone wrong</span>
			            </div>
			          </div>
			          <div class="control-group error">
			            <label class="control-label" for="inputError">Input with error</label>
			            <div class="controls">
			              <input type="text" id="inputError">
			              <span class="help-inline">Please correct the error</span>
			            </div>
			          </div>
			          <div class="control-group success">
			            <label class="control-label" for="inputSuccess">Input with success</label>
			            <div class="controls">
			              <input type="text" id="inputSuccess">
			              <span class="help-inline">Woohoo!</span>
			            </div>
			          </div>
			          <div class="control-group info">
			            <label class="control-label" for="selectError">Select with info</label>
			            <div class="controls">
			              <select id="selectError">
			                <option>1</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			              <span class="help-inline">Woohoo!</span>
			            </div>
			          </div>
			          <div class="form-actions">
			            <button type="submit" class="btn btn-primary">Save changes</button>
			            <button type="reset" class="btn">Cancel</button>
			          </div>
			        </fieldset>
			      </form>
			    </div>
			  </div>

			</section>

			<!-- Tables
			================================================== -->
			<section id="tables">
			  <div class="page-header">
			    <h1>Tables</h1>
			  </div>
			  
			  <table class="table table-bordered table-striped table-hover">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>First Name</th>
			        <th>Last Name</th>
			        <th>Username</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>1</td>
			        <td>Mark</td>
			        <td>Otto</td>
			        <td>@mdo</td>
			      </tr>
			      <tr>
			        <td>2</td>
			        <td>Jacob</td>
			        <td>Thornton</td>
			        <td>@fat</td>
			      </tr>
			      <tr>
			        <td>3</td>
			        <td>Larry</td>
			        <td>the Bird</td>
			        <td>@twitter</td>
			      </tr>
			    </tbody>
			  </table>
			</section>


			<!-- Miscellaneous
			================================================== -->
			<section id="miscellaneous">
			  <div class="page-header">
			    <h1>Miscellaneous</h1>
			  </div>

			  <div class="row">
			    <div class="span4">

			      <h3 id="breadcrumbs">Breadcrumbs</h3>
			      <ul class="breadcrumb">
			        <li class="active">Home</li>
			      </ul>
			      <ul class="breadcrumb">
			        <li><a href="#">Home</a> <span class="divider">/</span></li>
			        <li><a href="#">Library</a> <span class="divider">/</span></li>
			        <li class="active">Data</li>
			      </ul>
			    </div>
			    <div class="span4">
			      <h3 id="pagination">Pagination</h3>
			      <div class="pagination">
			        <ul>
			          <li><a href="#">&larr;</a></li>
			          <li class="active"><a href="#">10</a></li>
			          <li class="disabled"><a href="#">...</a></li>
			          <li><a href="#">20</a></li>
			          <li><a href="#">&rarr;</a></li>
			        </ul>
			      </div>
			      <div class="pagination pagination-centered">
			        <ul>
			          <li class="active"><a href="#">1</a></li>
			          <li><a href="#">2</a></li>
			          <li><a href="#">3</a></li>
			          <li><a href="#">4</a></li>
			          <li><a href="#">5</a></li>
			        </ul>
			      </div>
			    </div>
			    
			    <div class="span4">
			      <h3 id="pager">Pagers</h3>
			        
			        <ul class="pager">
			          <li><a href="#">Previous</a></li>
			          <li><a href="#">Next</a></li>
			        </ul>
			        
			        <ul class="pager">
			          <li class="previous disabled"><a href="#">&larr; Older</a></li>
			          <li class="next"><a href="#">Newer &rarr;</a></li>
			        </ul>
			    </div>
			  </div>

		</div>
		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		<script src="{{{ asset('assets/js/jquery.v1.8.3.min.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap/bootstrap.min.js') }}}"></script>
	</body>
</html>
