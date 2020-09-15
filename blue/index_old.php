<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Blue Startups Workshop - 11/17/15</title>

		<meta name="description" content="A simple presentation to facilitate workshop discussion.">
		<meta name="author" content="Chuck Liddell">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h1>Managing the Chaos</h1>
					<h3>An agile approach to being a startup</h3>
					<p>
						<small>Chuck Liddell, <a href="http://kapuhonu.com">KapuHonu</a></small>
					</p>
				</section>

				<section>
					<section>
						<h2>Topics</h2>
						<ul>
							<li>Agile + Scrum</li>
							<li>Collaboration / Communication</li>
							<li>Change Management</li>
							<li>Testing</li>
							<li>CRM</li>
							<li>Balance</li>
						</ul>
					</section>
					<section>
						<h3>Fist of Five</h3>
						<img data-src="fist-of-five-voting-method.jpg"/>
					</section>
				</section>

				<!-- Agile + Scrum -->
				<section>
					<section>
						<h2>Agile + Scrum</h2>
					</section>
					<section>
						<h3>What is Agile?</h3>
						<ul>
							<li><i>Individuals and interactions</i>: self-organization and motivation are important.</li>
							<li><i>Working software</i>: working software is more useful and welcome than just presenting documents to clients in meetings.</li>
							<li><i>Customer collaboration</i>: requirements cannot be fully collected at the beginning of the software development cycle, therefore continuous customer or stakeholder involvement is very important.</li>
							<li><i>Responding to change</i>: agile methods are focused on quick responses to change and continuous development.</li>
						</ul>
					</section>
					<section>
						<h3>Waterfall Model</h3>
						<img data-src="traditional-waterfall-development.png"/>
					</section>
					<section>
						<h3>Agile Model</h3>
						<img data-src="scrum-iteration-detail.png"/>
					</section>
					<section>
						<h3>Backlog</h3>
						<img data-src="scrum_board.jpg"/>
					</section>
					<section>
						<h3>Scrum Team</h3>
						<img data-src="scrum-team.jpg"/>
						<small><strong>Source</strong>: <a href="http://scrumtrainingseries.com/Intro_to_Scrum/Intro_to_Scrum.htm">http://scrumtrainingseries.com/Intro_to_Scrum/Intro_to_Scrum.htm</a></small>
					</section>
					<section>
						<h3>Scrum Meetings</h3>
						<img height="500" data-src="scrum-flow.png"/>
					</section>
				</section>

				<!-- Collaboration & Communication -->
				<section>
					<section>
						<h2>Collaboration &amp; Communication</h2>
						<p></p>
					</section>
					<section>
						<h3>Comms - Easy wins</h3>
						<p><small><strong>Goal</strong>: Give everyone a voice, without creating a cacophonous mess</small></p>
						<ul>
							<li>Get discussions where they belong</li>
							<li>Stop sending &nbsp;<i class="fa fa-envelope-o fa-lg"></i></li>
							<li>Get customers and stakeholders into the conversation</li>
						</ul>
					</section>
					<section>
						<h3>Google Calendar (<a href="http://learn.googleapps.com/products/calendar/">GCal Link</a>)</h3>
						<img data-src="calendar.webp"/>
					</section>
					<section>
						<h3>Slack (<a href="http://slack.com">Slack Link</a>)</h3>
						<img data-src="slack.jpg"/>
					</section>
					<section>
						<h3>Atlassian JIRA (<a href="https://www.atlassian.com/software/jira/">Jira Link</a>)</h3>
						<img data-src="jira.png"/>
					</section>
					<section>
						<h3>Atlassian Confluence (<a href="https://www.atlassian.com/software/confluence/">Wiki Link</a>)</h3>
						<img data-src="confluence.jpg"/>
					</section>
				</section>

				<!-- Change Management -->
				<section>
					<section>
						<h2>Change Management</h2>
					</section>
					<section>
						<ul>
							<li>What has changed?</li>
							<li>Why did it change?</li>
							<li>What is going to change?</li>
							<li>Why is it going to change?</li>
							<li>Who needs to know about it?</li>
						</ul>
					</section>
					<section>
						<h3>An Example</h3>
						<img height="500" data-src="whats-new.jpg"/>
					</section>
					<section>
						<h3>Git (<a href="https://git-scm.com/">Git Link</a>)</h3>
						<img data-src="git-workflow.png"/>
					</section>
					<section>
						<h3>Github (<a href="http://github.com">Github Link</a>)</h3>
						<img height="500" data-src="github.png"/>
					</section>
				</section>

				<!-- Testing -->
				<section>
					<section>
						<h2>Testing</h2>
					</section>
					<section>
						<img data-src="technical-debt.png"/>
						<small><strong>See</strong>: <a href="http://martinfowler.com/bliki/TechnicalDebt.html">http://martinfowler.com/bliki/TechnicalDebt.html</a></small>
					</section>
					<section>
						<h3>Tests, tests, tests...</h3>
						<table>
							<thead>
								<tr>
									<th>Approaches</th>
									<th>Types</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<ul>
											<li>GUI testing</li>
											<li>API testing</li>
											<li>Privileged testing</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>Regression testing</li>
											<li>Unit testing</li>
											<li>Integration testing</li>
											<li>End-to-end testing</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										Test-driven development<br/>
										Continuous testing / integration / deployment
									</td>
								</tr>
							</tbody>
						</table>
					</section>
					<section>
						<p>Testing will set you free...</p>
						<img data-src="matrix.jpg"/>
					</section>
					<section>
						<pre><code class="hljs" data-trim contenteditable style="font-size: 16px;">
/*
 * Test pagination stuff.
 */
System.assertEquals(1, laController.getCurrentPageNumber()); // expect to start at first page
System.assertEquals(4, laController.getLastPageNumber()); // expect four pages
System.assertEquals(false, laController.getHasPrev()); // no pages before this page
System.assertEquals(true, laController.getHasNext()); // yes pages after this one
laController.gotoLast();
System.assertEquals(4, laController.getCurrentPageNumber()); // expect to be at 4th page
System.assertEquals(false, laController.getHasNext()); // no pages after this page
System.assertEquals(true, laController.getHasPrev()); // yes pages before this page
laController.gotoPrev();
System.assertEquals(3, laController.getCurrentPageNumber()); // expect to be at 3rd page
System.assertEquals(true, laController.getHasNext()); // yes pages after this page
System.assertEquals(true, laController.getHasPrev()); // yes pages before this page
						</code></pre>
					</section>
				</section>

				<!-- CRM -->
				<section>
					<section>
						<h2>CRM</h2>
					</section>
					<section>
						<h3>CRM: What is it?</h3>
						<p>Customer relationship management (CRM) is an approach to managing a company's interaction with current and future customers. It often involves using technology to organize, automate, and synchronize sales, marketing, customer service, and technical support.</p>
					</section>
				</section>

				<!-- Balance -->
				<section>
					<section>
						<h2>Balance</h2>
					</section>
					<section>
						<h3>Prioritization</h3>
						<img data-src="quadrants.gif"/>
					</section>
				</section>

				<!-- Wrapping up -->
				<section>
					<h3>Wrap Up / Discussion</h3>
					<img data-src="tasks.png"/>
				</section>


			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
