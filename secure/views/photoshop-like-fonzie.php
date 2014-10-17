<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width initial-scale=1.0" />
	<meta name="google-translate-customization" content=""></meta>

	<title>Photoshop Etiquette</title>
	
	<!-- Favicons
	================================================== -->

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/globals.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/typography.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/grid.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/ui.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/buttons.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/tabs.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/navbar.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/forms.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/orbit.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/foundation-style/reveal.css">
	<link rel="stylesheet" href="photoshop-like-fonzie/stylesheets/app.css">

	<script src="photoshop-like-fonzie/javascripts/foundation/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body data-spy="scroll" data-target="#navbar">	
	<!--Nav-->
	<nav id="navbar">
		<div class="left">
			<ul class="nav">
				<li><a href="/">Black & Red Inc.</a></li>
				<li><a href="#top"></a></li>
			    <li><a href="#files">Files</a></li> 
			    <li><a href="#layers">Layers</a></li> 
			    <li><a href="#images">Images</a></li> 
			    <li><a href="#type">Type</a></li> 
			    <li><a href="#effects">Effects</a></li> 
			    <li><a href="#practices">Practices</a></li> 
			    <li><a href="#qa">QA</a></li> 
			    <li><a href="#exporting">Exporting</a></li> 
			</ul>
		</div>
	</nav><!--end nav-->
	

	
	<header id="top">
		<div class="row">
			<div class="twelve columns">
				<h1 class="ten columns centered">Photoshop Like <span class="emphasize">Fonzie<span></h1>
				<h4 class="clear">A Guide to Discernible Web Design in Photoshop</h4>
				<h4 class="clear">(Less back and forth. Beautiful work.)</h4>
				<h6 class="clear">What's Fonzie like? Cool.</h5>
				<a href="#files" class="large black button">Get Started</a>
				<div class="line"></div>
			</div><!--end 12-->
		</div><!--end row-->
	</header>

	
	
	<!--=======================================================================
	    ===========================FILES=======================================
	    =======================================================================
	    ====================================================================-->
	<section id="files">
		<div class="row">
			<div class="twelve columns clearfix">
				<div class="line"></div>
			
				<img src="photoshop-like-fonzie/images/icon_files.png" class="icon retina" />
				<div class="t"></div>
				<h2><!--&#64257;-->Files</h2>
				<p class="description">We start outside the Photoshop Document, with some good ol' external file organization. I mean, if you can't get your files organized in a reasonable way, what would anything else that you do inside the PSD matter?</p>
				
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Consolidate Your PSDs</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Don't go Ctrl/Cmd+N happy: keep your designs to a minimal number of PSDs." target="_blank"></a>Don't go Ctrl/Cmd+N happy: keep your designs to a minimal number of PSDs.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Keeping everything in one PSD reduces the confusion of which file to use.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/1_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/1_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>

					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Create Seperate PSDs by platform</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Don't go Ctrl/Cmd+N happy: keep your designs to a minimal number of PSDs." target="_blank"></a>Create individual PSDs for Web, Tablet and mobile.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Developers are terrible designers. Making clear versions of different devices gets the pixel perfect results that you intended, with less back and forth. Use MOBILE, WEB, TABLET</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/41_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/41_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>

					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Name Files Appropriately</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Wait, I'm confused. Should I use 'NEWEST.psd' or 'LATEST.psd'? How about 'Final_v2.psd'?" target="_blank"></a>Wait, I'm confused. Should I use &#8220;NEWEST.psd&#8221; or &#8220;LATEST.psd&#8221;? How about &#8220;Final_v2.psd&#8221;? Follow this format: ProjectName_PLATFORM_V#.psd</p>
					<div class="togglebox clearfix">	
						<p><strong>WHY?</strong> Ironically, absolutes like &#8220;Newest&#8221; and &#8220;Latest&#8221; are bound to have edits later. It's best to just keep a general file name. We would like you to name them ProjectName_PLATFORM_V#.psd. Example: &#8220;PulpFiction_MOBILE_V5.psd&#8220;</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/41_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/41_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.gomediazine.com/design-articles/organize-your-design-files-or-else/" target="_blank">Organize Your Files &mdash; OR ELSE!</a> / William Beachy</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Store Assets Relative to PSD</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Keep stock photos/icons in a folder close to the PSD, not in a desktop folder named 'Misc stuff'." target="_blank"></a>Keep stock photos/icons/fonts in a folder close to the PSD, not in a desktop folder named &#8220;Misc stuff&#8221;.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> PSD inheritors shouldn't have to go hunting to find original assets. Proximity is key to avoiding wasted time.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/3_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/3_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Files on Server/Share</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="'Is it on the server?' Such a simple question. Such a complex answer/excuse." target="_blank"></a>&#8220;Is it on the server?&#8221; Such a simple question. Such a complex answer/excuse.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Having to be asked where you put a file is common, but it shouldn't be necessary if you learn to put it on a file share before even being asked. Find out where to put your files from your producer.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/5_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/5_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->

				<div class="guideline">
					<h3><span class="toggle"></span><span>Provide a Changelog</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="What changed in this PSD?!" target="_blank"></a>Not knowing what changed in a particular version of a PSD can be death. Make an easy to read changelog of each PSD version</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Having to be asked what changed in a given PSD is common. Avoid back and forth by making it freely available in an easy to read text document.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/43_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/43_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<div class="takeaway">
					<p><span>Always</span> Organize Your Files</p>
				</div>
				<div class="line"></div>
				
			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================LAYERS======================================
	    =======================================================================
	    ====================================================================-->
	<section id="layers">
	
		<div class="row">
			<div class="twelve columns">
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_layers.png" class="icon" />
				<div class="t"></div>
				<h2>Layers</h2>
				<p class="description">Arguably the biggest source of angst amongst PSD inheritors, messy and unnamed layers suck the fun out of any situation. If you do nothing else, name your layers!</p>
				
				
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Name Layers & Be Accurate</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Be as descriptive as possible on *every* layer. 'Layer 0 copy copy' isn't gonna cut it." target="_blank"></a>Be as descriptive as possible on *every* layer. &#8220;Layer 0 copy copy&#8221; isn't gonna cut it.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> The quintessential piece of etiquette: naming your layers instantly decreases confusion and improves acclimation to an otherwise unfamiliar document. </p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/6_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/6_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://viget.com/inspire/handing-off-psds-that-wont-make-your-co-workers-hate-you" target="_blank">Handing Off PSDs That Won't Make Your Co-Workers Hate You</a> / Blair Culbreth</li>
							<li><a href="http://css-tricks.com/video-screencasts/89-organizing-photoshop/" target="_blank">Organizing Photoshop</a> / Chris Coyier</li>
							<li><a href="http://madcatphotography.wordpress.com/2010/05/27/photoshop-quick-tip-how-to-turn-off-add-copy-to-copied-layers-and-groups/" target="_blank">How to Turn Off 'Add Copy' to Copied Layers</a> / Dave Catley</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Folders</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Grouping layers makes it easy to show/hide various areas quickly." target="_blank"></a>Grouping layers makes it easy to show/hide various areas quickly.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Happy layers have happy homes. Folders group like-items for easier navigation and editing.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/7_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/7_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.webdesignerdepot.com/2009/08/how-to-effectively-organize-your-photoshop-layers/" target="_blank">How to Effetively Organize Your Photoshop Layers</a> / Josh Sears</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Delete Unnecessary Layers</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Are you a layer hoarder? It's cool to get rid of all the unused layers from your PSD." target="_blank"></a>Are you a layer hoarder? It&#8217;s OK to get rid of all the unused layers from your PSD.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Having too many layers hanging around usually results in an unnecessary bloat of file size and can affect performance. </p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/8_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/8_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.bittbox.com/photoshop/how-to-photoshop-delete-all-hidden-layers" target="_blank">How to Delete All Hidden Layers</a> / Jay Hilgert</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Make All layers within a group visable.</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Do you like to hide layers just for fun? It takes a long time to find invisible buried layers within groups." target="_blank"></a>Do you like to hide layers just for fun? It takes a long time to find invisible buried layers within groups.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Do your developers frequently claim something is missing even though you KNOW it's there? This is usually the problem. Make top layer groupings invisible as necessary, and ALWAYS make sublayers visible. </p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/42_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/42_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.bittbox.com/photoshop/how-to-photoshop-delete-all-hidden-layers" target="_blank">How to Delete All Hidden Layers</a> / Jay Hilgert</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Globalize Common Elements</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="No reason to have 5 copies of the logo for different layouts. Globalize it on a master layer." target="_blank"></a>No reason to have 5 copies of the logo for different layouts. Globalize it on a master layer.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> If you use an element (logo, photo, etc.) in multiple layouts within the PSD, only having to edit it in one place makes a lot of sense.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/9_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/9_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Layer Comps/Smart Objects</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Layer Comps (Window > Layer Comps) are a great way of showing variations without having to build multiple PSDs." target="_blank"></a>Layer Comps (Window > Layer Comps) are a great way of showing variations without having to build multiple PSDs.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Layer Comps & Smart Objects offer a way of showing multiple states or layouts without needing to build (and maintain) another PSD.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/10_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/10_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://methodandcraft.com/videos/states-and-layer-comps" target="_blank">States and Layer Comps</a> / Andy Rossi</li>
							<li><a href="http://viget.com/inspire/smart-ways-to-use-adobe-photoshops-smart-objects" target="_blank">Smart Ways to Use Smart Objects</a> / Mindy Wagner</li>
							<li><a href="http://bjango.com/articles/smartobjects/" target="_blank">Smart Objects</a> / Bjango</li>
							<li><a href="http://methodandcraft.com/videos/smart-objects-for-psd-slicing" target="_blank">Smart Objects for PSD Slicing</a> / Joel Glovier</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<div class="takeaway">
					<p><span>Always</span> Name Your Layers</p>
				</div>
				<div class="line"></div>

			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================IMAGES======================================
	    =======================================================================
	    ====================================================================-->
	<section id="images">
	
		<div class="row">
			<div class="twelve columns">
				
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_images.png" class="icon" />
				<div class="t"></div>
				<h2>Images</h2>
				<p class="description">Working with images is all about being non-destructive. You certainly don&#8217;t want to limit the shelf life of a photo or button by recklessly adding irreparable filters or effects.</p>
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Don&#8217;t Stretch or Flatten Buttons</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Best case scenario: keep your shapes vector. Otherwise, keep a copy of the vector before rasterizing." target="_blank"></a>Best case scenario: keep your shapes vector. Otherwise, keep a copy of the vector before rasterizing.</p>
					<div class="togglebox clearfix">					
						<div class="six columns">
							<h5>Try This</h5>
							<img src="photoshop-like-fonzie/images/examples/11_good.png" />
						</div><!--end 6-->
						<div class="six columns end">
							<h5>Not This</h5>
							<img src="photoshop-like-fonzie/images/examples/11_bad.png" />
						</div><!--end 6-->
						<ul>
							<li><a href="http://bjango.com/articles/roundrect/" target="_blank">Roundrect Roundup</a> / Bjango</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Globalize Masks</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Apply masks to folders instead of using the same mask on individual layers." target="_blank"></a>Apply masks to folders instead of using the same mask on individual layers.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It's always better to only have to edit one mask than multiple masks.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/12_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/12_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.smashingmagazine.com/2009/12/17/unveiling-photoshop-masks/" target="_blank">Unveiling Photoshop Masks</a> / Tom Giannattasio</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Snap</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Snap to grid. Snap to pixel. Snap until there's nothing left to snap to. Beats being off by a pixel *ahh the horror!*." target="_blank"></a>Snap to grid. Snap to pixel. Snap until there&#8217;s nothing left to snap to. Beats being off by a pixel *ahh the horror!*.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> When you&#8217;re consistently off by a pixel, somebody has to go in and align things correctly. Shouldn&#8217;t it be you?</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/13_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/13_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Blending Modes w/ Care</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="How'd you get that color? Make sure it's not an amalgamation of 2 Overlays, 4 Multiplies and 16 Color Burns." target="_blank"></a>How&#8217;d you get that color? Make sure it's not an amalgamation of 2 Overlays, 4 Multiplies and 16 Color Burns.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It&#8217;s difficult to figure out what the hex value of your mashed-up color is. Make it easy.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/14_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/14_bad.png" />
							</div><!--end 6-->
						</div>
						<ull>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Go Non-Destructive</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Use Masks, Smart Objects and Adjustment Layers to avoid forever deleting precious pixels." target="_blank"></a>Use Masks, Smart Objects & Adjustment Layers to avoid forever deleting precious pixels.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> If a silhouette needs retouching, or a logo needs resizing, or you choose to go back to full color photos instead of black and white, it&#8217;s much easier when it&#8217;s not erased, rasterized or flattened. </p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/15_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/15_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://buildinternet.com/2009/03/quick-tip-use-layer-masks-to-erase-in-photoshop/" target="_blank">Use Layer Masks to Erase</a> / Zach Dunn</li>
							<li><a href="http://www.smashingmagazine.com/2012/03/09/top-non-destructive-photoshop-techniques/" target="_blank">Top Non-Destructive Techniques</a> / Adrian Taylor</li>
							<li><a href="http://methodandcraft.com/videos/non-destructive-dodge-and-burning" target="_blank">Non-Destructive Dodge and Burning</a> / Phil Coffman</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<div class="takeaway">
					<p><span>Always</span> Stay Flexible</p>
				</div>
				<div class="line"></div>
				
			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================TYPE========================================
	    =======================================================================
	    ====================================================================-->
	<section id="type">
		<div class="row">
			<div class="twelve columns">
			
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_type.png" class="icon" />
				<div class="t"></div>
				<h2>Type</h2>
				<p class="description">There&#8217;s no getting around using type in Photoshop, no matter how dissimilar the text rendering is to what happens in browser. What you can control, however, are the values and areas you use text.</p>
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Whole Pixel Values</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Refrain from resizing text with the Free Transform tool and give it a whole number value instead." target="_blank"></a>Refrain from resizing text with the Free Transform tool. Give it a whole number value instead.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Consistency in your typesetting is key. It rarely makes sense to use fractions and decimals in Photoshop.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/16_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/16_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Make Licensed Fonts Available</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Make the fonts you've used available without having to be contacted, and make sure they're licensed." target="_blank"></a>Make the fonts you've used available, and make sure they're licensed to be shared.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> There's nothing worse than needing to edit type and not being able to because you don&#8217;t have the fonts. Supply the fonts PLEASE, hopefully in ttf or woff --Or even better! Use webfonts from Google.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/17_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/17_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Don't Stretch Type</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Besides looking awful, there's no easy way to do it via HTML/CSS." target="_blank"></a>Besides looking awful, there&#8217;s no easy way to do it via HTML/CSS.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Beyond not being able to do it programmatically, I doubt the typographer intended for their type to be squished or stretched.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/18_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/18_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Control Your Text Boxes</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Nice to see you using text-boxes. Just don't make them 5 miles longer than the actual text." target="_blank"></a>Nice to see you using text-boxes. Just don&#8217;t make them 5 miles longer than the actual text.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Longer-than-necessary text boxes can prohibit selecting text that&#8217;s behind it and can be frustrating to work around.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/19_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/19_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://methodandcraft.com/videos/shaping-textfields-in-photoshop" target="_blank">Shaping Textfields</a> / Adrian Taylor</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Separate Text Boxes</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Heading? Gets its own text box. Set of paragraphs? Gets their own text box." target="_blank"></a>Heading? Gets its own text box. Set of paragraphs? Gets their own text box.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It takes more clicks to find the font family and size of multiple types of text within one text box than it does to do so on an individualized, singular text box.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/20_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/20_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->

				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Webfonts</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Don't leave it up to a developer to find an 'alternative' to unavailable web fonts. Use a web font from the get-go." target="_blank"></a>Don&#8217;t leave it up to a developer to find an &#8220;alternative&#8221; to non-webfonts. Use a webfont from the get-go.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Besides the amazing selection to choose from, webfonts are the norm. Not the norm? Text as images.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/28_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/28_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.webink.com/webfontplugin" target="_blank">WebINK Webfont Plugin</a> / Extensis</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<div class="takeaway">
					<p><span>Always</span> Be in Control</p>
				</div>
				<div class="line"></div>

			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================EFFECTS=====================================
	    =======================================================================
	    ====================================================================-->
	<section id="effects">
		<div class="row">
			<div class="twelve columns">
			
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_effects.png" class="icon" />
				<div class="t"></div>
				<h2>Effects</h2>
				<p class="description">A plea: please use effects and filters in moderation. PSD inheritors will have less to sort through, and in most cases, more filters ≠ better design.</p>
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use Color Overlays Appropriately</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Let's take this cerulean rectangle and make it mauve with a color overlay. WHYYYYYYY?!" target="_blank"></a>Let&#8217;s take this cerulean rectangle and make it mauve with a color overlay. WHYYYYYYY?!</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It&#8217;s much easier to navigate the layer panel with color thumbnails that represent the color of the elements on the canvas.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/21_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/21_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Nail Tileable Images</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="If it's not easy to make a repeating JPEG of a patterned background, you probably should steer clear." target="_blank"></a>If it&#8217;s not easy to make a repeating JPEG of a patterned background, you probably should steer clear.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> A slightly-off repeating image is incredibly noticeable. It&#8217;s worth the time to get it right.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/22_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/22_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://www.smashingmagazine.com/2011/10/03/whys-hows-textures-web-design/" target="_blank">The Whys & Hows of Textures in Web Design</a> / Jon Savage</li>
							<li><a href="http://methodandcraft.com/videos/creating-tileable-textures" target="_blank">Creating Tileable Textures</a> / Phil Coffman</li>
							<li><a href="http://designinstruct.com/tools-basics/photoshop-patterns-ultimate-guide/" target="_blank">Photoshop Patterns Ultimate Guide</a> / Jacob Gube</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Dither and Gradients</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Is that supposed to be a gradient or 32 slightly different stripes?" target="_blank"></a>Is that supposed to be a gradient or 32 slightly different stripes? Did you make it an effect?</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Gradients are meant to be smooth, and like everything else, it&#8217;s better to get it right the first time. Also, effects should be separate and not flattened onto a layer.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/24_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/24_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://bjango.com/articles/gradients/" target="_blank">Gradients</a> / Bjango</li>
						</ul>
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				
				<div class="takeaway">
					<p><span>Always</span> Think Before Using Effects</p>
				</div>
				<div class="line"></div>
				
			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================PRACTICES===================================
	    =======================================================================
	    ====================================================================-->
	<section id="practices">
		<div class="row">
			<div class="twelve columns">
			
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_practices.png" class="icon" />
				<div class="t"></div>
				<h2>Practices</h2>
				<p class="description">Not that any of the following guidelines will automagically make you a better designer, but they'll help your approach to working in Photoshop for certain. Just five of the many considerations you can be making.</p>

				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->

				<div class="guideline">
					<h3><span class="toggle"></span><span>Make a Retina Version</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Design ALL your psd's for retina, make sure you've got those fancy hi-dpi screens covered." target="_blank"></a>Design ALL your psd's for retina, make sure you've got those fancy hi-dpi screens covered.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> iOS devices are almost exclusively &#8220;Retina&#8221;. More devices are sure to follow.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/40_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/40_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://methodandcraft.com/videos/optimizing-textured-artwork-for-png-export" target="_blank">Optimizing Textured Artwork for PNG Export</a> / Phil Coffman</li>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Use a Grid</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Nice try. You can't 'break the grid' if you don't have said grid." target="_blank"></a>Nice try. You can't &#8220;break the grid&#8221; if you don't have said grid.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Grids help guide (pun intended). Establishing a system of heights, widths and alignment for your design is essential.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/26_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/26_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://elliotjaystocks.com/blog/a-better-photoshop-grid-for-responsive-web-design/" target="_blank">A Better Photoshop Grid for Responsive Web Design</a> / Elliot Jay Stocks</li>
							<li><a href="http://www.smashingmagazine.com/2011/11/09/establishing-your-grid-in-photoshop/" target="_blank">Establishing Your Grid in Photoshop</a> / Steve Schoeffel</li>
							<li><a href="http://www.guideguide.me/" target="_blank">GuideGuide</a> / Cameron McEfee</li>
							<li><a href="http://modulargrid.org/#panel" target="_blank">Modular Grid Extension</a> / Modular Grid</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Consider Device Width</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Will your one PSD at 960px cut it? Or do you need a Responsive Workflow?" target="_blank"></a>Will your one PSD at 960px cut it? Or do you need a Responsive Workflow?</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It&#8217;s best to design with the mindset of how things will adapt to different widths, as opposed to hoping everything plays nice after the fact.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/29_good.png" class="borderless" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/29_bad.png" class="borderless" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://devrocket.uiparade.com/" target="_blank">Dev Rocket</a> / UI Parade</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				
				<div class="takeaway">
					<p><span>Always</span> Keep Learning</p>
				</div>
				<div class="line"></div>

			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	
	<!--=======================================================================
	    ===========================QA==========================================
	    =======================================================================
	    ====================================================================-->
	<section id="qa">
		<div class="row">
			<div class="twelve columns">
			
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_qa.png" class="icon" />
				<div class="t"></div>
				<h2>QA</h2>
				<p class="description">Ever hear of the term &#8220;being too close to a design&#8221;? While knee-deep in pixels, it&#8217;s easy to miss some glaring mistakes. Employ some quality assurance.</p>
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Proofread</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Get someone else's eyes on your comp before it goes out to eyes who will undoubtedly find your grammatical mistakes." target="_blank"></a>Get someone else&#8217;s eyes on your comp before it goes out to eyes who will undoubtedly find your grammatical mistakes.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> It&#8217;s easy for a designer to overlook things like misspelled headlines when you're focused on individual pixels.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/31_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/31_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Be Familiar w/ Browser Compatibility</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Knowing browser limitations should come standard with the 'Web Design 101' package." target="_blank"></a>Knowing browser limitations should come standard with the &#8220;Web Design 101&#8221; package.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Browsers each render content differently, but more importantly, there are some that don&#8217;t take advantage of CSS3, or basic PNG transparency (ahem, IE6).</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/34_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/34_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Be Consistent</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Are you unintentionally using 3 slightly different blues? Is your red the same one as their logo?" target="_blank"></a>Are you unintentionally using 3 slightly different blues? Is your red the same one as their logo?</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Unless intentional, it&#8217;s painstaking to have to eyedrop 10 different blues all trying to be the same value, but aren&#8217;t.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/35_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/35_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://0to255.com/" target="_blank">0to255</a> / Shaun Chapman</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<div class="takeaway">
					<p><span>Always</span> Be Consistently Thorough</p>
				</div>
				<div class="line"></div>

			</div><!--end 12-->
		</div><!--end row-->
	</section>
	
	
	<!--=======================================================================
	    ===========================EXPORTING===================================
	    =======================================================================
	    ====================================================================-->
	<section id="exporting">
		<div class="row">
			<div class="twelve columns">
				<div class="line"></div>
				<img src="photoshop-like-fonzie/images/icon_exporting.png" class="icon" />
				<div class="t"></div>
				<h2>Exporting</h2>
				<p class="description">One thing&#8217;s for certain: if your job is to export images from your PSD, it&#8217;s something you only want to have to do once. Don&#8217;t overlook this step in the process.</p>
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Save for Web</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Simply choosing 'Save As > JPEG' will get you bigger files, color issues and a world of hurt from your dev." target="_blank"></a>Simply choosing &#8217;Save As > JPEG&#8217; will get you bigger files, color issues and a world of hurt from your dev.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> Save for Web (& Devices) is geared towards properly compressing your image to be used on the web. &#8220;Save As&#8221; is not.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/36_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/36_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://macrabbit.com/slicy/" target="_blank">Slicy</a> / MacRabbit</li>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Conserve File Size</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="Go old school: negotiate quality/colors used to make smaller files. Yep, it's still relevant." target="_blank"></a>Go old school: negotiate quality/colors used to make smaller files. Yep, it's still relevant.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> With your images being delivered over all kinds of networks to all kinds of devices, proper compression and small file sizes are incredibly important.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/37_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/37_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
							<li><a href="http://methodandcraft.com/videos/optimizing-textured-artwork-for-png-export" target="_blank">Optimizing Textured Artwork for PNG Export</a> / Phil Coffman</li>
						</ul>
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>Name Files for Function</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="'blue_square3.jpg' doesn't give the developer much indication where it should go. Except the trash." target="_blank"></a>&#8220;blue_square3.jpg&#8221; doesn't give the developer much indication where it should go. Except the trash.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> This goes along with &#8220;Name Files Appropriately&#8221;, since the goal is to be as clear as possible with what the file is, as simply as possible.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/38_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/38_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				<div class="guideline">
					<h3><span class="toggle"></span><span>No Unnecessary Space</span><br class="clear"/></h3>
					<p><a class="retweetRule" title="No need to build in extra margin or padding for layout purposes. That's what CSS is for." target="_blank"></a>No need to build in extra margin or padding for layout purposes. That's what CSS is for.</p>
					<div class="togglebox clearfix">					
						<p><strong>WHY?</strong> CSS excels at being easy to adjust positioning. Photoshop's workflow (Open --> Nudge --> Save for Web)? Not so much.</p>				
						<div class="row">
							<div class="six columns">
								<h5>Try This</h5>
								<img src="photoshop-like-fonzie/images/examples/39_good.png" />
							</div><!--end 6-->
							<div class="six columns end">
								<h5>Not This</h5>
								<img src="photoshop-like-fonzie/images/examples/39_bad.png" />
							</div><!--end 6-->
						</div>
						<ul>
						</ul>
						
						
					</div><!--end togglebox clearfix clearfix-->
				</div><!--end guideline-->
				
				<!--= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =-->
				
				<div class="takeaway">
					<p><span>Always</span> Take Your Time</p>
				</div>
				<div class="line"></div>

			</div><!--end 12-->
		</div><!--end row-->
	</section>
	

	<!-- Included JS Files -->
	<script src="photoshop-like-fonzie/javascripts/jquery.min.js"></script>
	<script src="photoshop-like-fonzie/javascripts/foundation/jquery.reveal.js"></script>
	<script src="photoshop-like-fonzie/javascripts/foundation/jquery.orbit-1.4.0.js"></script>
	<script src="photoshop-like-fonzie/javascripts/foundation/jquery.customforms.js"></script>
	<script src="photoshop-like-fonzie/javascripts/foundation/jquery.placeholder.min.js"></script>
	<script src="photoshop-like-fonzie/javascripts/foundation/jquery.tooltips.js"></script>
	<script src="photoshop-like-fonzie/javascripts/app.js"></script>
	<script src="photoshop-like-fonzie/javascripts/retina.js"></script>
	<!--<script src="javascripts/jquery.retina.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('img.retina').retina();
		});
	</script>-->
	
	<!--<script>
	$(document).ready(function(){
	$('[data-spy="scroll"]').each(function () {
    var $spy = $(this).scrollspy('refresh')
});
});
	</script>-->

</body>

</html>
