<?php include 'includes/header.php'; ?>

<main id="index">
	<section class="block block-divider" id="echo">
		<header class="block-header">
			<h2>Echoing</h2>
		</header>
		<p>PHP allows us to put content on the page by using the <code class="language-php">echo</code> command</p>
		<pre class="line-numbers">
			<code class="language-php">
				<?php
					echo "Hello World!";
				?>
			</code>
		</pre>
		<p>PHP allows us to use a concatenation operator. This glues several strings together.</p>
		<pre class="line-numbers">
			<code class="language-php">
				<?php
					echo "Your" . " " . "Mother"
				 ?>
		 </code>
		</pre>
		<p>PHP can do maths too. All the operators are avaliable to us.</p>
		<pre class="line-numbers">
			<code class="language-php">
				<?php
					echo 17 * 123;
				?>
			</code>
		 </pre>
		 <p>PHP Allows us to use variables. Unlike JavaScript every variable starts with a $. We can have strings, numbers and values of course.</p>
		 <pre class="line-numbers">
			 <code class="language-php">
				 <?php
					 $myName = "Stewart Hines";
				 ?>
			 </code>
			</pre>
	</section>
	<section class="block" id="submitForm">
		<header class="block-header">
				<h2>Submit A Form</h2>
		</header>
		<div class="block-body">
			<form action="process.php" method="post">
				<input type="text" name="name" value="" placeholder="Input Yer Name">
				<input type="submit" name="button" value="Submit!">
			</form>
		</div>
	</section>
</main>

<?php include 'includes/footer.php'; ?>
