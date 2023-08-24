<html>
<!DOCTYPE html>
<title>Courses</title>
<link rel="shortcut icon" href="BC.jpg"/>
<html lang="en" dir="ltr">

<style>

    body {
        margin-left: 50px;
        margin-right: 50px;
        text-align: center; }
	p.courses {
		border-radius: 20px;
    	padding: 15px;
    	background-color: #064c6b;
        margin-left: 75px;
        margin-right: 75px;
        text-align: justify; }
    img {
    	float: right;
        border-radius: 25px;
        background-color: #064c6b;
        display: block;
        margin-left: 50px;
        margin-right: 50px;
        width: 150px;
        height: 150px; }    
    button {
    	margin-left: 845px;
    	background-color: #064c6b;
    	border-radius: 40px;
    	color: #FFAA33;
    	border-color: #064c6b;
    	padding: 15px;
    	text-align: center;
    	font-size: 30px;}   
</style>

<?php
    include_once '../header.php';
?>


<br><br><br><br>
<body>
	<p class="courses"><font color="#FFAA33" size="20px" font-weight="bold"><b> Java </b></font>
<br><img src="images\java.svg">
			Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need to recompile. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub,particularly for client–server web applications, with a reported 9 million developers.
<br><br>
			Java was originally developed by James Gosling at Sun Microsystems. It was released in May 1995 as a core component of Sun Microsystems' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GPL-2.0-only license. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open-source software and used by most developers and is the default JVM for almost all Linux distributions.
<br><br>
			One design goal of Java is portability, which means that programs written for the Java platform must run similarly on any combination of hardware and operating system with adequate run time support. This is achieved by compiling the Java language code to an intermediate representation called Java bytecode, instead of directly to architecture-specific machine code. Java bytecode instructions are analogous to machine code, but they are intended to be executed by a virtual machine (VM) written specifically for the host hardware. End-users commonly use a Java Runtime Environment (JRE) installed on their device for standalone Java applications or a web browser for Java applets.

		</p>
<br>
		<button><a href="plan/brocode_product.html"><font color="#FFAA33";>Subscribe</font></a></button>


</body>
        <a href="../courses.php"><img src='images/arrowleft.png' style="float:right;margin-top:15px;width:42px;height:42px;"></a>
<br><br>
<br><br>
<br><br>

<?php
    include_once '../footer.php';
?>
</html>