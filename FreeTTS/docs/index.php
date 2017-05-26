<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
<!--

/**
 * Copyright (c) 2001, 2002  Sun Microsystems, Inc.
 * 
 * See the file "license.terms" for information on usage and
 * redistribution of this file, and for a DISCLAIMER OF ALL 
 * WARRANTIES.
 */

-->
  <meta name="generator" content="HTML Tidy, see www.w3.org">
  <title>FreeTTS 1.1.1 - A speech synthesizer written entirely in the
Java(TM) programming language</title>
</head>
<body bgcolor="white">
<center>
<table bgcolor="#bbbae2" border="0" width="100%">
  <tbody>
    <tr>
	<td align="center" width="100%">	                                     
      <h2><i>FreeTTS 1.1.1</i> - A speech synthesizer written entirely
in the Java<sup><font size="-1">TM</font></sup> programming language</h2>
	</td>
    </tr>
  </tbody>
</table>
</center>
<table border="0" width="100%">
  <tbody>
    <tr>
      <td bgcolor="#eeeeff" valign="top" width="20%">
      <center>
      <p><br>
      <big><b>Listen to <i>FreeTTS!</i></b></big></p>
      </center>
      <p><font size="-1"><b>Talking clock (16k voice):</b><br>
      <a href="audio/12-35.au">AU</a> format<br>
      <a href="audio/12-35.wav">WAV</a> format </font></p>
      <p><font size="-1"><b>Talking machine (8k):</b><br>
      <a href="audio/talkforever.au">AU</a> format<br>
      <a href="audio/talkforever.wav">WAV</a> format </font></p>
      <p><font size="-1"><b>Talking machine (16k):</b><br>
      <a href="audio/talkforever16.au">AU</a> format<br>
      <a href="audio/talkforever16.wav">WAV</a> format </font></p>
      <p><font size="-1"><b>Susie (16k):</b><br>
      <a href="audio/shoeshineshop.au">AU</a> format<br>
      <a href="audio/shoeshineshop.wav">WAV</a> format </font></p>
      <p><font size="-1"><b>Cookie Cooks (16k):</b><br>
      <a href="audio/cookiecooks.au">AU</a> format<br>
      <a href="audio/cookiecooks.wav">WAV</a> format </font></p>
      <p><font size="-1"><b>Tricky Tokenizing (16k):</b><br>
      <i>"For 3/4 or 75% of his time, Dr. Walker practices for $90 a
visit on Dr. Dr., next to King Philip X of St. Lameer St. in Nashua NH."</i><br>
      <a href="audio/complex.au">AU</a> format<br>
      <a href="audio/complex.wav">WAV</a> format<br>
      </font></p>
      <p><font size="-1"><b>Thanks! (16k MBROLA):<br>
      </b><a href="audio/thanks.au">AU</a> format<br>
      <a href="audio/thanks.wav">WAV</a> format<br>
      </font></p>
      <hr>
      <center><big><b><small>WebStartClock</small> </b></big></center>
      <div align="left">
      <div align="left"><small>A clock that uses FreeTTS to announce
the time.</small><br>
      </div>
      <small> <br>
      </small>
      <div align="center"><a href="../WebStartClock/clock.jnlp"><small><img
 src="images/TinyWebStartClock.jpg" alt="WebStart Clock" width="90"
 height="55"></small></a><br>
      </div>
      <small> <a href="asdf"><br>
      </a></small>
      <div align="center"><a href="../WebStartClock/clock.jnlp"><small>Launch
WebStartClock</small></a><b>&nbsp;</b> </div>
      </div>
      <hr>
      <center><b><font>FreeTTS Links</font></b></center>
      <b><font size="-1"><!-- <b><font color="#ff0000">FreeTTS Links</font> --> <br>
      <a href="http://freetts.sourceforge.net/twiki/"> FreeTTS TWiki</a><br>
      <a href="http://sourceforge.net/projects/freetts"> Project Page</a><br>
      <a href="https://sourceforge.net/forum/?group_id=42080"> Forums</a><br>
      <a
 href="http://sourceforge.net/project/showfiles.php?group_id=42080">
Download</a> <br>
      <a href="http://sourceforge.net/cvs/?group_id=42080"> CVS
Repository</a> <br>
      <br>
      <br>
      <hr>
      <center><a href="http://www.sourceforge.net"><img
 src="http://sourceforge.net/sflogo.php?group_id=40785&amp;type=1"
 width="88" height="31" border="0" alt="SourceForge Logo"> </a>	<br>
Hosted by SourceForge.net</center>
      </font></b></td>
      <td width="5%"><br>
      </td>
      <td><br>
      <b><i>Welcome!</i></b> Thank you for your interest in <i>FreeTTS</i>.
      <h3>General Information</h3>
      <ul>
        <li><a href="#what_is_freetts">Introduction</a></li>
        <li><a href="#who_authors">Authors</a></li>
        <li><a href="../RELEASE_NOTES">Release Notes</a></li>
<!-- <li><a href="#what_files">Files included in the distribution</a></li> --> <li><a
 href="#possible_uses">Possible uses of FreeTTS</a></li>
        <li><a href="#contribute">How to contribute to FreeTTS</a></li>
        <li><a href="#acknowledgments">Acknowledgments</a></li>
      </ul>
      <h3>Quick Start</h3>
      <ul>
        <li><a href="#quick_start_unix">Quick Start for UNIX</a></li>
        <li><a href="#quick_start_windows">Quick Start for Windows</a></li>
      </ul>
      <h3>Installation</h3>
      <ul>
        <li><a href="#prerequisites">Prerequisites for building and
running</a></li>
        <li><a href="#how_build">Building FreeTTS</a></li>
        <li><a href="#how_test">Testing FreeTTS</a></li>
      </ul>
      <h3>Demos</h3>
      <ul>
        <li><a href="#run_demo">Running the demos</a></li>
      </ul>
      <h3>Documentation</h3>
      <ul>
        <li><a href="#freetts_api">API documentation</a></li>
        <li><a href="ProgrammerGuide.html">Programmer's Guide</a></li>
        <li><a href="#writing_software">Writing software with FreeTTS</a></li>
      </ul>
      <h3>Frequently Asked Questions</h3>
      <ul>
        <li><a href="#why_jdk1.4">Why must I use Java<sup><font
 size="-1">TM</font></sup> 2 SDK, Standard Edition, v 1.4?</a></li>
        <li><a href="#performance">How does FreeTTS perform?</a></li>
        <li><a href="#why_sound_bad">Why does the diphone synthesizer
sound so bad?</a></li>
        <li><a href="#output_to_file">How do I output synthesized
speech to an audio file?</a></li>
        <li><a href="#voices_available">What voices are available?</a></li>
        <li><a href="#is_full_jsapi">Does FreeTTS provide full support
for the JSAPI 1.0 specification?</a></li>
        <li><a href="#import_voice_data">How do I import new voice data
from Festival or Flite?</a></li>
        <li><a href="#no_jsapi">Why do I get a NoClassDefFoundError
when I try to run a demo?</a></li>
        <li><a href="#old_java">Why do I get an
UnsupportedClassVersionError  when I try to run a demo?</a></li>
        <li><a href="#How_do_I_add_support_for_a_voice_with">How do I
add support for a voice with language XXX?</a></li>
        <li><a href="#What_does_the_message_Cant_find">What does the
message "Can't find diphone xx-yy" mean?</a></li>
        <li><a href="#How_do_I_create_a_new_voice_How_do_I">How do I
create a new voice? How do I create a limited domain voice?</a></li>
        <li><a href="#I_get_no_sound_when_I_run_one_of_the">I get no
sound when I run one of the FreeTTS demos. Why?</a></li>
        <li><a href="#Can_I_use_FreeTTS_in_an_applet">Can I use FreeTTS
in an applet?</a></li>
        <li><a href="#Can_I_use_FreeTTS_with_JavaTM_Web_Start">Can I
use FreeTTS with Java<sup>TM</sup> Web Start</a></li>
        <li><a href="#What_does_the_message_Line_unavailable">What does
the message "Line unavailable" mean?</a></li>
        <li><a href="#where_is_recognizer">Where is the speech
recognizer?</a></li>
      </ul>
      <br>
      </td>
  <td bgcolor="#eeeeff" valign="top" width="25%">
  <center>
  <br><b>Latest News </b> <br>
  </center>
  <?php include('http://sourceforge.net/export/projnews.php?group_id=42080&limit=6&flat=1&show_summaries=1'); ?>
  </td>
  </tbody>
</table>
<hr>
<h3>General Information about FreeTTS</h3>
<ul>
  <li><a name="what_is_freetts"><b>Introduction</b></a></li>
  <p>FreeTTS 1.1.1 is a speech synthesis system written entirely in the
Java<sup><font size="-1">TM</font></sup> programming language. It is
based upon <a href="http://www.cmuflite.org">Flite 1.1</a>: a small
run-time speech synthesis engine developed at Carnegie Mellon
University. Flite is derived from the <a
 href="http://www.cstr.ed.ac.uk/projects/festival/">Festival</a> Speech
Synthesis System from  the University of Edinburgh and the <a
 href="http://festvox.org/">FestVox</a> project from Carnegie Mellon
University.</p>
  <p>This release of FreeTTS includes:</p>
  <ul>
    <li>Core speech synthesis engine</li>
    <li>Support for a number of voices:</li>
    <ul>
      <li>an 8khz diphone, male, US English voice</li>
      <li>a 16khz diphone, male US English voice</li>
      <li>a 16khz limited domain, male US English voice</li>
    </ul>
    <li>Support for MBROLA voices (downloaded separately):</li>
    <ul>
      <li>a 16khz female, US English voice</li>
      <li>two 16khz male US English voices<br>
      </li>
    </ul>
    <li>Partial support for JSAPI 1.0</li>
    <li>Extensive API documentation<br>
      <br>
    </li>
  </ul>
  <ul>
  </ul>
  <li><a name="who_authors"><b>Authors</b></a></li>
  <p>FreeTTS was built by the <a
 href="http://research.sun.com/research/speech/index.html">Speech 
Integration Group</a> of <a href="http://research.sun.com">Sun 
Microsystems Laboratories</a>:</p>
  <ul>
    <li> Willie Walker, Manager and Principal Investigator 	</li>
    <li> Paul Lamere, Staff Engineer 	</li>
    <li> Philip Kwok, Member of Technical Staff</li>
  </ul>
  <p>You can contact the Sun Microsystems Speech Integration Group
through the <a href="https://sourceforge.net/forum/?group_id=42080">
FreeTTS Forums</a>. </p>
  <p>FreeTTS is based on <a href="http://www.cmuflite.org">CMU's Flite</a>,
written by:</p>
  <ul>
    <li>Alan Black </li>
    <li>Kevin Lenzo</li>
  </ul>
  <p>Kevin and Alan generated the data used by FreeTTS.  In addition,
Kevin is the voice  behind the diphone voices (kevin 8k, kevin 16k),
and Alan is the voice behind  the speaking clock.<br>
  <br>
Support for MBROLA voice output was contributed by Marc Schr&ouml;der, 
text-to-speech Researcher in the <a href="http://www.dfki.de/lt">Language
Technology Lab at DFKI</a>,  Saarbr&uuml;cken, Germany<!--
<p>
<li><a name="what_files"><b>Files included in the distribution</b></a></li>

<p>
<ul>
<li><a href="README.txt">README.txt</a> - provides an overview of the FreeTTS package</li>
<li><a href="../RELEASE_NOTES">RELEASE_NOTES</a> - describes the change history for the FreeTTS package</li>
<li><a href="../license.terms">license.terms</a> - licensing terms for FreeTTS </li>
<li><a href="../acknowledgments.txt">acknowledgments.txt</a> - acknowledges contributors to FreeTTS</li>
<li><a href="../Makefile">Makefile</a> - top level Makefile for building FreeTTS</li>
<li><a href="../build">build</a> - contains GNU Make rules for building FreeTTS</li>
<li><a href="../demo">demo</a> - contains demos of FreeTTS 

<ul>
<li><a href="../demo/JSAPI">JSAPI</a> - contains demos that use JSAPI 1.0

<ul>
<li><a href="../demo/JSAPI/Emacspeak/README.html">Emacspeak</a> - contains Emacspeak demo</li>
<li><a href="../demo/JSAPI/HelloWorld/README.html">HelloWorld</a> - contains simple JSAPI HelloWorld demo</li>

<li><a href="../demo/JSAPI/MixedVoices/README.html">MixedVoices</a> - contains JSAPI multiple voice/synthesizer demo</li>

<li><a href="../demo/JSAPI/Player/README.html">Player</a> - Swing demo that monitors and manipulates a JSAPI synthesizer</li>
</ul>
</li>

<li><a href="../demo/freetts">freetts</a> - contains low-level, non-JSAPI demos 

<ul>
<li><a href="../demo/freetts/HelloWorld/README.html">HelloWorld</a> - non-JSAPI hello world demo</li>
<li><a href="../demo/freetts/ClientServer/README.html">ClientServer</a> - demonstrates using FreeTTS as a TTS server</li>
</ul>
</li>

<li><a href="../demo/util">util</a> - contains code shared by multiple demos</li>
<li><a href="../demo/Makefile">Makefile</a> - builds the demos</li>
</ul>
</li>

<li><a href=".">docs</a> - contains documentation for FreeTTS</li>

<li>javadoc.zip - contains complete FreeTTS API documentation; to unzip use '<code>jar xf javadoc.zip</code>'</li>

<li><a href="../lib">lib</a> - contains jar files for FreeTTS 

<ul>
<li>freetts.jar - the core FreeTTS engine</li>

<li>cmuawb.jar - the limited domain voice called alan</li>

<li>cmukal16.jar - the unlimited domain, 16khz voice, called kevin16</li>

<li>cmukal8.jar - the unlimited domain, 8khz voice called kevin</li>

<li>cmulex.jar - the English lexicon</li>

</ul>

<li><a href="../speech.properties">speech.properties</a> - configuration file for JSAPI 1.0 support</li>

<li>tests.zip - contains FreeTTS testsuite, to unzip use '<code>jar xf tests.zip</code>'</li>

<li>src.zip - contains FreeTTS source; to unzip use '<code>jar xf src.zip</code>'</li>
</ul>
</li>
--> </p>
  <li><a name="possible_uses"><b>Possible uses of FreeTTS</b></a></li>
  <p>Here are a few possible uses of FreeTTS: </p>
  <ul>
    <li><i><b>JSAPI 1.0 Synthesizer.</b></i> FreeTTS provides      
partial support for the <a
 href="http://java.sun.com/products/java-media/speech/">Java      
Speech API</a> (JSAPI) 1.0 specification. </li>
    <li><i><b>Remote TTS Server.</b></i> FreeTTS can serve as a back-end
text-to-speech engine that works with a speech/telephony system. Our <a
 href="../demo/freetts/ClientServer/README.html">client/server demo</a>
shows how this can be done. </li>
    <li><i><b>Desktop TTS engine.</b></i> You can use FreeTTS as your
workstation/desktop TTS engine. For example, our <a
 href="../demo/JSAPI/Emacspeak/README.html">Emacspeak demo</a> works
right out of the box with <a
 href="http://www.cs.cornell.edu/Info/People/raman/emacspeak/emacspeak.html">Emacspeak</a>.<br>
      <br>
    </li>
  </ul>
  <li><a name="contribute"><b>How to contribute to FreeTTS</b></a></li>
  <p> We welcome contributions to FreeTTS.  If you have code or fixes
you would like to submit, please contact the FreeTTS team at <a
 href="mailto:freetts-contacts@sourceforge.net">freetts-contacts@sourceforge.net</a>.
The terms for contributing code are generous and are as follows:</p>
  <ul>
	 <li> Your code must be made available under the 	   same BSD-style <a
 href="../license.terms">license</a> agreement             as FreeTTS.</li>
    <li> You may place your own copyright in your source           
files.</li>
    <li> You must sign and return the <a
 href="ContributorsAgreement.pdf">Contributor's            Agreement</a>to
the address specified in the            Contributor's Agreement.</li>
    <li> We will add you to the "Acknowledgments" section            on
the FreeTTS front page.</li>
  </ul>
  <p>We apologize in advance if these terms seem heavyweight. They are
for your and our protection, however, and help ensure FreeTTS continues
to be a viable and successful open source project. </p>
  <li><a name="acknowledgments"><b>Acknowledgments</b></a></li>
  <p>Refer to <a href="../acknowledgments.txt">acknowledgments</a> to
see the list of people and organizations we would like to thank for
making this project possible. Most of all, we thank our management for
letting us do this, and Alan Black and Kevin Lenzo for doing Flite. </p>
</ul>
<hr>
<h3>Quick Start</h3>
<ul>
  <li><a name="quick_start_unix"><b>Quick Start for UNIX</b></a></li>
  <p>For Linux and Solaris systems, you need to have GNU Make 3.79 or
higher to run the demos.  Visit <a href="http://www.gnu.org/">http://www.gnu.org/</a>
to get GNU Make.  Once you have GNU Make, do the following:</p>
  <ol>
    <li>Download and untar the <a
 href="http://sourceforge.net/project/showfiles.php?group_id=42080">FreeTTS
tarball</a>.</li>
    <li>Copy the <b>speech.properties</b> file from the FreeTTS
directory you just created to your home directory.</li>
    <li>The JSAPI implementation is covered under a separate license. 
To get the JSAPI support, 'cd' to the 'lib' directory of the FreeTTS
directory, and type 'sh jsapi.sh' to unpack jsapi.jar.</li>
    <li>Download and install the Java<sup>TM</sup> 2 SDK, Standard
Edition, 1.4&nbsp; from <a href="http://java.sun.com/j2se/1.4/">http://java.sun.com/j2se/1.4/</a>.
Set your JAVA_HOME environment variable to where you installed the JDK<sup>TM</sup>
(e.g., JAVA_HOME=/usr/java/j2sdk1.4.0).</li>
    <li>In any of the FreeTTS demo directories (e.g.,
demo/JSAPI/HelloWorld), type 'make run'&nbsp; (make sure the 'make' you
are using is GNU Make).</li>
    <li>To build or run the tests, you need to get JUnit 3.7 from <a
 href="http://junit.org/">http://junit.org/</a>.  JUnit comes in a zip
file.  Unzip it in a directory of your choice, and set your JUNIT_HOME
environment variable to that directory (e.g.,
JUNIT_HOME=/usr/java/junit3.7).<br>
      <br>
    </li>
  </ol>
  <li><a name="quick_start_windows"><b>Quick Start for Windows</b></a></li>
  <p>For Windows systems, we've provided trivial <code>run.bat</code>
files to let you run the demos.  Before you can run the demos, however,
you need to do the following:</p>
  <ol>
    <li>Download and untar the <a
 href="http://sourceforge.net/project/showfiles.php?group_id=42080">FreeTTS
tarball</a>.</li>
    <li>Copy the <b>speech.properties</b> file in the FreeTTS directory
to your home directory.  If you don't know where your Windows home
directory is, you can come back to this step later:  the demos will tell
you where to copy the speech.properties file.</li>
    <li>The JSAPI implementation is covered under a separate license. 
To get the JSAPI support, 'cd' to the 'lib' directory of the FreeTTS
directory, and type 'jsapi.exe' to unpack jsapi.jar.</li>
    <li>Download and install the Java 2 SDK, Standard Edition,
1.4&nbsp; from <a href="http://java.sun.com/j2se/1.4/">http://java.sun.com/j2se/1.4/</a>.
Set your JAVA_HOME environment variable to where you installed the JDK
(e.g., JAVA_HOME=c:\j2sdk1.4).</li>
    <li>In a DOS prompt window, go to any of the demo directories
(e.g., demo\JSAPI\HelloWorld) and type 'run.bat'. You might run into one
or two problems:                                                       
      <ul>
        <li>An UnsupportedClassVersionError message.  This is because
the run.bat script has found <code>java</code> and <code>javac</code>
executables that are not from Java 2 SDK, Standard Edition, 1.4.  Make
sure your JAVA_HOME environment variable points to the directory where
you installed the Java 2 SDK, Standard Edition, 1.4.</li>
        <li>A message from the demo telling you to copy the <b>speech.properties</b>file
to your home directory or the Java 2 SDKlib directory.  You should copy
the file to either directory.</li>
      </ul>
    </li>
    <li>To build or run the tests, you need to get JUnit 3.7 from <a
 href="http://junit.org">http://junit.org</a>.  JUnit comes in a zip
file.  Unzip it in a directory of your choice, and set your JUNIT_HOME
environment variable to that directory (e.g., JUNIT_HOME=c:\junit3.7). 
      <p>To run the tests, you also need to install Cygwin (<a
 href="http://www.cygwin.com">http://www.cygwin.com</a>).  As part of
the Cygwin install, make sure you select the "make" package from the
"Devel" category, the "findutils" package from the "Base" category, and
the "zip" package from the "Archive" category.  In addition, make sure
you modify your PATH environment variable to include the cygwin/bin
directory before any Windows directories.  If you don't do this, the
FreeTTS Makefiles will use the Windows "FIND" command first and will
fail. </p>
    </li>
  </ol>
</ul>
<hr>
<h3>Installation</h3>
<ul>
  <li><a name="prerequisites"><b>Prerequisites for building and running
FreeTTS</b></a></li>
  <ul>
    <p> </p>
    <li> <b> FreeTTS Source Tree </b> available as a <a
 href="http://sourceforge.net/project/showfiles.php?group_id=42080&amp;release_id=65759">compressed
tarball</a> or directly from the FreeTTS <a
 href="http://sourceforge.net/cvs/?group_id=42080"> CVS Repository</a>.
The compressed tarball includes ready-to-run prebuilt JAR files for
FreeTTS. </li>
    <p> </p>
    <li><b>Java<sup><font size="-1">TM</font></sup> 2 SDK, Standard
Edition, v1.4 </b>available at <a href="http://java.sun.com/j2se/1.4/">http://java.sun.com/j2se/1.4/</a>
(all platforms).
      <p>FreeTTS requires the Java 2 SDK, Standard Edition, v 1.4
platform.&nbsp; FreeTTS has been tested on the Solaris<sup><font
 size="-1">TM</font></sup> Operating Environment, Linux and Win32
operating systems.</p>
      <p>After you have downloaded and installed the SDK, remember to
set your <code><b>JAVA_HOME</b></code> environment variable to
point to where you installed it.  You can also edit the<code>
build/Config.dos</code> and/or <code>build/Config.unix</code>
files to set the JAVA_HOME variable. </p>
    </li>
    <li> <b> JSAPI 1.0 specification implementation </b>
      <p>FreeTTS requires an implementation of the JSAPI 1.0
specification.   The JSAPI 1.0 specification implementation (i.e., the
javax.speech.* classes) is not available under a BSD-style license. 
Instead, we are making the binaries available under a separate binary
code license.</p>
      <b>UNIX Systems </b> - This distribution includes a 
self-extracting shell archive containing the <code>jsapi.jar</code>
file. If you are running under Linux or the Solaris<sup><font size="-1">TM</font></sup>
Operating Environment, (or any other system that supports <code>sh</code>)
follow these instructions:                                             
      <ol>
        <li> Go to the FreeTTS/lib directory. </li>
        <li> Type <code>sh ./jsapi.sh</code> </li>
        <li> If the binary license agreement is acceptable, accept it by
typing "y". The <code>jsapi.jar</code> file will be unpacked and
deposited into the lib directory.</li>
      </ol>
      <br>
      <b>Win32</b> - This distribution includes an installer program
containing the <code>jsapi.jar</code> file.  If you are running on a
Win32 operating system follow these instructions:                      
      <ol>
        <li> Go to the FreeTTS/lib directory </li>
        <li> Type <code> .\jsapi.exe </code> </li>
        <li> If the binary license agreement is acceptable, accept it by
clicking "I Agree". The <code>jsapi.jar</code> file will be     
unpacked and deposited into the <code>lib</code> directory.<br>
          <br>
        </li>
      </ol>
<!-- Since jdk1.4beta3 only works on windows, linux and solaris, there
 are currently no 'other' systems --><!--
<br><b> Other Systems</b> - If 
self-extracting shell archives (Win32,
Mac) Follow these steps to get an implementation of the JSAPI 1.0 specification:
<ol>
 	<li> Go to <a href="http://research.sun.com/speech/software">
http://research.sun.com/speech/software</a> 
	<li> Review and accept the license agreement </li>
	<li> Login using the following user name and password</li>
<pre>
    	User Name: 	jsapi 
	Password: 	sunspeech
</pre> </li>
	<li> Download the Java Speech API Utilties (either as 
	<code> jsutils10.tar.Z or jsutils10.zip</code>) </li>
	<li> Uncompress/untar the downloaded file </li>
	<li> Copy the file <code> jsutils/lib/jsapi.jar
	</code> to <code> FreeTTS/lib/jsapi.jar</code> </li>
</ol>
<p>Note that although this JSUtils package contains a large number of
files, the only thing that FreeTTS actually uses from JSUtils is 
the 'jsapi.jar' file.  The JSUtils code is old, and unsupported. The only
reason to download it is to get the jsapi.jar file.  To extract just
the jsapi.jar file you can do the following:
<p>
For the compress tar file:
<pre>

    % zcat jsutils10.tar.Z | tar xvf - jsutils-1.0/jsapi/lib/jsapi.jar
</pre>

For the zip file:
<pre>

    % unzip jsutils10.zip  jsutils-1.0/jsapi/lib/jsapi.jar
</pre>

Once you have extracted jsapi.jar copy it to the <code>FreeTTS/lib</code>
directory:

<pre>
    cp jsutils-1.0/jsapi/lib/jsapi.jar FreeTTS/lib/jsapi.jar
</pre>
--> </li>
    <li><b>GNU Make version 3.79</b> or higher.
 <p>The demos can be easily run from makefiles. These makefiles require
a recent version of GNU Make. We have tested with GNU Make version 3.79.</p>
      <p><b>UNIX Systems</b> - available at <a href="http://www.gnu.org">http://www.gnu.org</a>.</p>
      <p><b>Win32</b> - available at <a href="http://www.cygwin.com">http://www.cygwin.com</a>.
At this webpage, click on the "Install Cygwin Now" links.  As part of
the Cygwin install, make sure you select the "make" package from the
"Devel" category, the "findutils" package from the "Base" category, and
the "zip" package from the "Archive" category.  In addition, make sure
you modify your PATH environment variable to include the cygwin/bin
directory before any Windows directories.  If you don't do this, the
FreeTTS Makefiles will use the Windows "FIND" command first and will
fail. </p>
    </li>
    <li><b>JUnit Version 3.7</b> <i>(Testing only)</i>, available at <a
 href="http://www.junit.org">http://www.junit.org</a> (all platforms).  
      <p>JUnit is only needed if you intend to run the unit tests
included with FreeTTS. Download the Junit3.7.zip file, unzip it, and
set your JUNIT_HOME environment variable to point to where you
installed JUnit 3.7. </p>
    </li>
    <li><b> UNIX Scripting tools </b> <i>(Testing only)</i> - The
regression tests use a number of UNIX tools including: <code>sed, awk,
diff,</code>and <code>wc</code>.  For Windows users, these tools
are available with the Cygwin package described in the section for
getting GNU make.<br>
      <br>
    </li>
    <li><b>Install speech.properties</b> - Copy the <b>speech.properties</b>
file from the top level directory to your home directory. This step is
required for JSAPI demos and applications.<br>
      <br>
    </li>
  </ul>
  <li><a name="how_build"><b>Building FreeTTS</b></a></li>
  <p>Since the distribution comes with compiled class files, you
normally do not have to build FreeTTS. If you do want to build it,
follow these steps: </p>
  <ol>
    <li>Make sure that you have the proper version of the Java 2
Platform, Standard Edition, and GNU Make.</li>
    <li>Unpack the sources with the command:            
      <pre>    % jar xf src.zip<br></pre>
    </li>
    <li>Build the FreeTTS engine and the demos with command:           
      <pre>    % make all<br></pre>
      <p><b>Important:</b> Make sure you are using GNU make.  You can
check to see if you are using GNU make by typing the command '<code>make
-version</code>'.  If you do not get results similar to the following,
then you most likely do not have GNU make: </p>
      <pre>  GNU Make version 3.79, by Richard Stallman and Roland McGrath.<br>  Built for sparc-sun-solaris2.6<br>  Copyright (C) 1988, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99 Free Software Foundation, Inc.<br>  This is free software; see the source for copying conditions.<br>  There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A<br>  PARTICULAR PURPOSE.<br><br>  Report bugs to &lt;bug-make@gnu.org&gt;.<br></pre>
      <p><b>Note:</b> On many systems, the GNU make command is also
called gmake. If this is the case on your system, then use gmake
instead of make. </p>
    </li>
    <li>The output class files are placed in the 'classes' directory.</li>
  </ol>
  <p><i>Note that you may receive complaints about missing directories
if you build the sources without unpacking  the 'tests.zip'  file as
well (See below).  The complaints are harmless.<br>
  </i><br>
  </p>
  <li><a name="installing_mbrola"></a><b><a
 name="Installing_MBROLA_Suppport"></a>Installing MBROLA Voices</b></li>
</ul>
<blockquote>
  <blockquote>FreeTTS will work with the MBROLA synthesizer. &nbsp;This
extends the capabilities of FreeTTS by providing an additional set of
high quality voices. &nbsp;The MBROLA Synthesizer is available for
free, for non commercial, non military applications&nbsp; at the <a
 href="http://tcts.fpms.ac.be/synthesis/mbrola.html">MBROLA Project</a>
website. &nbsp;Currently, there does not exist a version of the MBROLA
synthesizer written in the Java<sup><small><small>TM</small></small></sup>
programming language. To use the MBROLA synthesizer you must first
download the MBROLA binary appropriate for your computer.
    <p> <i> Note that currently FreeTTS only supports MBROLA synthesis
under the Solaris(TM) and the Linux operating systems. </i> </p>
  </blockquote>
  <blockquote><b>How to setup MBROLA with FreeTTS</b></blockquote>
  <blockquote>
    <blockquote>MBROLA is available for many platforms in the form of a
standalone binary. &nbsp;A&nbsp;large number of diphone voice databases
exist for many languages. Three US English voices exist, named us1
(female), us2 (male) and us3 (male). Binaries and voice databases can
be downloaded free for non-commercial, non-military use at the <a
 href="http://tcts.fpms.ac.be/synthesis/mbrola.html">MBROLA Project</a>
website.</blockquote>
    <blockquote>The MBROLA databases are based on the SAMPA phonetic
alphabet, but a translation table from the phonetic alphabet which
Festival (and therefore FreeTTS) uses is provided with voice us1 (it is
called "us1mrpa").</blockquote>
  </blockquote>
  <blockquote><b>How to set up the MBROLA files</b><br>
  </blockquote>
  <blockquote>
    <blockquote>Decide on a base directory where to put both the MBROLA
binary and the MBROLA &nbsp;voice databases. Let's assume this is
/home/jim/mbr. The MBROLA binary &nbsp;for the correct platform must be
downloaded from the <a
 href="http://tcts.fpms.ac.be/synthesis/mbrola.html">MBROLA Project</a>
website and placed into that directory (i.e., it is
/home/jim/mbr/mbrola). Voice databases can be downloaded and unpacked
in the mbrola base directory: &nbsp; &nbsp; <br>
      <pre>&nbsp; &nbsp; cd /home/jim/mbr</pre>
      <pre>&nbsp; &nbsp; unzip us1-980512.zip </pre>
      <br>
such that the actual database is the binary file
/home/jim/mbr/us1/us1). For all three voices, the translation table is
assumed to be located in &nbsp;/home/jim/mbr/us1/us1mrpa. This
translation table only ships with <i>us1,</i> &nbsp;not with <i>us2</i>
or <i>us3.</i> Therefore, you must at least install <i>us1 </i>&nbsp;to
use any MBROLA voice. If you install <i>us2</i> without installing the <i>us1</i>
voice FreeTTS will produce an error when attempting to use the <i>us2</i>
voice. &nbsp;<br>
    </blockquote>
  </blockquote>
  <blockquote><b>Important:</b>
    <blockquote>To use MBROLA with FreeTTS, you must specify your
MBROLA directory as the Java system property "mbrola.base". Java system
properties are usually specified at the command line with he "-D"
switch, e.g., <br>
      <pre>java -Dmbrola.base=/home/jim/mbr</pre>
For all the FreeTTS demos, you should set the environment variable
MBROLA_DIR (e.g., "setenv MBROLA_DIR /home/jim/mbr" in csh). This will
automatically set the Java system property "mbrola.base".<br>
    </blockquote>
  </blockquote>
</blockquote>
<ul>
  <li><a name="how_test"><b>Testing FreeTTS</b></a></li>
  <p>FreeTTS includes a number of unit and regression tests. The unit
tests verify that critical routines are working properly. The
regression tests verify that the output of FreeTTS matches what is
expected. The unit tests require a package called JUnit.</p>
  <blockquote><b>NOTE: </b>The regression tests also make use of a
standard set of UNIX utilities such as<code> sed</code>, <code>awk</code>,<code>diff</code>
and<code> wc</code>. They are typically not available on a vanilla Win32
system. To get these tools, we recommend using the Cygwin environment
described in the section for getting GNU make.</blockquote>
  <p>To verify that your FreeTTS source was built properly, follow
these steps:</p>
  <ol>
    <li>Make sure that you have the proper version of the Java 2
Platform, Standard Edition, and GNU Make.</li>
    <li>Make sure that you have JUnit version 3.7 or later installed
(available at <a href="http://www.junit.org">http://www.junit.org</a>).</li>
    <li>Build at least the 'com' portion of the tree (see previous
section, "Building FreeTTS").</li>
    <li>Unpack the tests with the command:                             
      <pre>     % jar xf tests.zip<br></pre>
    </li>
    <li>Edit <code>build/Config.dos</code> and/or <code>build/Config.unix</code>
to set the environment variable <code>JUNIT_HOME</code> to point to the
directory that contains the junit.jar file, or just set your <code>JUNIT_HOME</code>
environment variable.</li>
    <li>Execute the test with the following commands:                  
      <pre>     % cd tests<br>     % make alltests<br></pre>
    </li>
    <li>To run just the unit tests, use the following commands: </li>
    <pre>     % cd tests<br>     % make tests<br></pre>
    <li>The test output should be self explanatory.</li>
  </ol>
</ul>
<h3><a name="test_program"></a>FreeTTS Test Program</h3>
<div style="margin-left: 40px;">The FreeTTS distribution includes a
program that will allow you to test many of the features of FreeTTS.
&nbsp;This program is started by the 'bin/freetts' script
(bin/freetts.bat on win32 systems). To run the scripts you will need to
unpack the 'tests.zip' file (See above for instructions on how to do
this).<br>
<br>
<pre><span style="font-weight: bold;">NAME</span><br>    freetts - exercise the FreeTTS synthesis sytem<br><br><span
 style="font-weight: bold;">DESCRIPTION</span><br>    freetts is a script that invokes <br>    com.sun.speech.freetts.FreeTTS. It allows a user to<br>    interactively control the FreeTTS synthesizer.  When <br>    invoked with no arguments, freetts will read text from<br>    the terminal and convert the text to speech.  freetts can<br>    also be used to convert text from a file or the command line<br>    to speech. It includes options that allow you to redirect <br>    the audio to file, as well as a number of metrics and <br>    debugging options.<br><br><span
 style="font-weight: bold;">OPTIONS</span><br>    There are a number of options that can be used to affect the<br>    operation of freetts as described here:<br><br>    -detailedMetrics: turn on detailed metrics<br>    -dumpAudio file : dump audio to file <br>    -dumpAudioTypes : dump the possible output types<br>    -dumpMultiAudio file : dump audio to file <br>    -dumpRelations  : dump the relations <br>    -dumpUtterance  : dump the final utterance<br>    -dumpWave file  : dump the final wave to file<br>    -file file      : speak text from given file<br>    -lines file     : render lines from a file<br>    -help           : shows usage information<br>    -metrics        : turn on metrics<br>    -run  name      : sets the name of the run<br>    -silent         : don't say anything<br>    -streaming      : use streaming audio player<br>    -text say me    : speak given text (should be last argument)<br>    -url path       : speak text from given URL<br>    -verbose        : verbose output<br>    -version        : shows version number<br>    -voice VOICE    : kevin, kevin16, mbrola1, mbrola2, or mbrola3<br><br><span
 style="font-weight: bold;">EXAMPLES<br></span></pre>
<ul>
  <li> <span style="font-style: italic;">Interactive mode:</span></li>
</ul>
<div style="margin-left: 40px;">		
<pre>    % freetts    <br>    Enter text:  Hello World.<br>	<span
 style="font-style: italic;">&nbsp;&lt;text is spoken&gt;</span><br>   &nbsp;Enter text: ^D</pre>
<pre>    %</pre>
</div>
<ul>
  <li> <span style="font-style: italic;">Speaking text from a command
line</span></li>
</ul>
<pre>   	 % freetts -text hello world<br>              <span
 style="font-style: italic;"> &lt;text is spoken&gt;</span><br></pre>
<ul>
  <li> <span style="font-style: italic;">Speaking text from a file</span></li>
</ul>
<pre>         % freetts  -file my_email.txt<br></pre>
<ul>
  <li><span style="font-style: italic;">Selecting an alternate voice</span><br>
  </li>
</ul>
<pre>         % freetts -voice kevin16 -text Hello World</pre>
<ul>
  <li> <span style="font-style: italic;">Redirecting audio to a file </span></li>
</ul>
<pre><span style="font-style: italic;"></span>        % freetts -dumpAudio hello.wav -text hello world <br></pre>
</div>
<hr>
<h3>Demos</h3>
<ul>
  <li><a name="run_demo"><b>How do I run the demos?</b></a></li>
  <li
 style="list-style-type: none; list-style-position: outside; list-style-image: none;">
    <p>FreeTTS includes a number of demos. Each demo directory has Java
source file(s) containing the demo source, a Makefile that will build
and run the demo, and a 'README.html' file with brief instructions as
to how to run the demo. Each demo is described briefly here:</p>
    <ul>
      <li><a href="../demo/JSAPI/HelloWorld/README.html"><b>JSAPI/HelloWorld</b></a>
- a program that uses the JSAPI 1.0 Synthesis interface to speak "Hello,
World".</li>
      <li><a href="../demo/JSAPI/MixedVoices/README.html"><b>JSAPI/MixedVoices</b></a>
- a program that demonstrates using multiple voices and speech
synthesizers in a coordinated fashion using JSAPI 1.0</li>
      <li><a href="../demo/JSAPI/Player/README.html"><b>JSAPI/Player</b></a>
- a Swing-based GUI that allows the user to monitor and manipulate a
JSAPI 1.0 Speech Synthesizer.</li>
      <li><a href="../demo/JSAPI/JTime/README.html"><b>JSAPI/JTime</b></a>
- a JSAPI program that uses a limited-domain, high quality voice to tell
the time.</li>
      <li><a href="../demo/JSAPI/Emacspeak/README.html"><b>JSAPI/Emacspeak</b></a>
- a program that uses JSAPI 1.0 to provide a text-to-speech server for
Emacspeak.</li>
      <li><b><a href="../demo/JSAPI/WebStartClock/README.html">JSAPI/WebStartClock</a></b>
- a JSAPI talking clock that can be downloaded from the web using Java
Web Start.<br>
      </li>
      <li><a href="../demo/freetts/HelloWorld/README.html"><b>freetts/HelloWorld</b></a>
- a low-level (non-JSAPI) program that speaks a greeting to the world.</li>
      <li><a href="../demo/freetts/ClientServer/README.html"><b>freetts/ClientServer</b></a>
- a low-level (non-JSAPI) socket-based TTS server with sample clients
written in the C programming language and the Java programming language.</li>
    </ul>
    <p>Typically, unless it is a client/server demo, just typing 'make
run' or 'gmake run' should run the demo. </p>
    <p><b>Important:</b> <i>Be sure to copy the '<code>speech.properties</code>'
file to your home directory before running the demos that use JSAPI
1.0. If you are not sure where to copy this file, try running one of
the JSAPI demos. If the demo cannot find the 'speech.properties' file,
it will tell you where you should put it.</i></p>
  </li>
</ul>
<hr>
<h3>Documentation</h3>
<ul class="noindent">
  <li><a name="freetts_api"><b>API documentation</b></a></li>
  <p>The <a href="./api/index.html">FreeTTS API Documentation</a>
contains the engine documentation. Note that if this link is broken, you
probably have not unpacked the javadoc.zip file. Unpack it with "<code>jar
xf javadoc.zip</code>". </p>
  <li><a name="writing_software"><b>Writing software with FreeTTS</b></a></li>
  <p>We recommend that you use the <a
 href="http://java.sun.com/products/java-media/speech/forDevelopers/jsapi-doc/index.html">
Java Speech API (JSAPI) 1.0</a> to interface to FreeTTS. The JSAPI
interface provides the best method of controlling and using FreeTTS.
The JSAPI demos provide a set of examples that show how to select a
FreeTTS synthesizer and make it speak. </p>
</ul>
<hr>
<h3>Frequently Asked Questions</h3>
<ul>
  <li><a name="why_jdk1.4"><b>Why must I use Java 2 SDK, Standard
Edition, v 1.4?</b></a></li>
  <p>Some of the many compelling reasons to use Java 2 SDK, Standard
Edition, v 1.4. are: </p>
  <ul>
    <li><b>New IO package</b> - Java 2 SDK, Standard Edition, v 1.4
provides a new IO (<code><b>java.nio</b></code>) package that provides
memory mapped file I/O. This package drastically reduces the load times
of the FreeTTS databases. </li>
    <li><b>Regular expressions</b> - Java 2 SDK, Standard Edition, v 1.4
provides a new package for regular expression matching (<code><b>java.util.regex</b></code>).
They are used in the FreeTTS text normalization step.</li>
    <li><b>Assert Facility</b> - Java 2 SDK, Standard Edition, v 1.4
added the new <code>assert</code> keyword to ensure that certain
conditions are satisfied before continuing execution. FreeTTS uses this
keyword in all stages of speech synthesis.</li>
    <li><b>Compiler Optimizations</b> - Java 2 SDK, Standard Edition, v
1.4 has numerous compiler optimizations that produce faster and more
compact code. For example, with the <code><b>-server</b></code> switch,
byte codes are optimized to eliminate bounds checking on array accesses
whenever possible.<br>
      <br>
    </li>
  </ul>
  <li><a name="performance"><b>How does FreeTTS perform?</b></a></li>
  <p>We compared the performance of FreeTTS with that of Flite
(original C version) on a machine with this configuration:</p>
  <ul>
    <li>single 296MHz CPU SPARC v9 processor</li>
    <li>Solaris<sup><font size="-1">TM</font></sup> 8 in 64-bit mode</li>
    <li>Java 2 SDK, Standard Edition, v 1.4&nbsp;</li>
  </ul>
  <p>We rendered the first two chapters of <i>Alice's Adventures in
Wonderland</i> by Lewis Carroll (about 20 minutes of text),  and the
entire text of Jules Verne's <i>Journey to the Center of the Earth</i>
(about 8 hours of text) using both Flite and FreeTTS. The results are
summarized below: </p>
  <p>
  <table border="1" cellspacing="0" cellpadding="1" width="60%">
    <tbody>
      <tr>
        <td bgcolor="#ccccee"> <b>Single CPU 296MHz SPARC v9</b></td>
        <td bgcolor="#ccccee"><b>Flite</b></td>
        <td bgcolor="#ccccee"><b>FreeTTS</b></td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Loading Time for 'Alice' text</td>
        <td> 0.0s</td>
        <td> 4.1s</td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Processing Time for 'Alice' text</td>
        <td>43.7s</td>
        <td> 24.1s</td>
      </tr>
      <tr>
        <td bgcolor="#eeeeff">Loading Time for 'Journey' text</td>
        <td> 0.0s</td>
        <td> 7.0s</td>
      </tr>
      <tr>
        <td bgcolor="#eeeeff">Processing Time for 'Journey' text</td>
        <td> 1019.2s</td>
        <td> 341.0s</td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Time to first Sample (10 word sentence)</td>
        <td> 195ms</td>
        <td> 41ms</td>
      </tr>
    </tbody>
  </table>
  </p>
  <p>On a 2-CPU system with the following configuration: </p>
  <ul>
    <li> Dual 360MHz CPU SPARC v9 Processor system</li>
    <li>Solaris<sup><font size="-1">TM</font></sup> 8 in 64-bit mode</li>
    <li>Java 2 SDK, Standard Edition, v 1.4&nbsp;</li>
  </ul>
  <p>The results are summarized below: </p>
  <p>
  <table border="1" cellspacing="0" cellpadding="1" width="60%">
    <tbody>
      <tr>
        <td bgcolor="#ccccee"> <b>Dual CPU 360MHz SPARC v9</b></td>
        <td bgcolor="#ccccee"><b>Flite</b></td>
        <td bgcolor="#ccccee"><b>FreeTTS</b></td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Loading Time for 'Alice' text</td>
        <td>0.0s</td>
        <td> 2.9s</td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Processing Time for 'Alice' text</td>
        <td>35.7s</td>
        <td> 14.2s</td>
      </tr>
      <tr>
        <td bgcolor="#eeeeff">Loading Time for 'Journey' text</td>
        <td> 0.0s</td>
        <td> 3.8s</td>
      </tr>
      <tr>
        <td bgcolor="#eeeeff">Processing Time for 'Journey' text</td>
        <td> 842.7s</td>
        <td> 189.5s</td>
      </tr>
      <tr>
        <td bgcolor="#ddddee">Time to first Sample (10 word sentence)</td>
        <td> 165ms</td>
        <td> 33ms</td>
      </tr>
    </tbody>
  </table>
  </p>
  <li><a name="why_sound_bad"><b>Why does the diphone synthesizer sound
so bad?</b></a></li>
  <p>FreeTTS uses the same algorithms and voice data from Flite. Here
is what the Flite README says about voice quality:</p>
  <blockquote><i>"So you've eagerly downloaded flite, compiled it and
run it, now you are disappointed that is doesn't sound wonderful, sure
its fast and small but what you really hoped for was the dulcit tones
of a deep baritone voice that would make you desperately hang on every
phrase it sang.  But instead you get an 8Khz diphone voice that sounds
like it came from the last millenium.</i>
    <p><i>Well, first, you are right, it is an 8KHz diphone voice from
the last millenium, and that was actually deliberate.  As we developed
flite we wanted a voice that was stable and that we could directly
compare with that very same voice in Festival.  Flite is an *engine*. 
We want to be able take voices built with the FestVox process and
compile them for flite, the result should be exactly the same quality
(though of course trading the size for quality in flite is also an
option).  The included voice is just an sample voice that was used in
the testing process.  We have better voices in Festival and are working
on the conversion process to make it both more automatic and more
robust and tunable, but we haven't done that yet, so in this first beta
release. This old poor sounding voice is all we have, sorry, we'll
provide you with free, high-quality, scalable, configurable, natural
sounding voices for flite, in all languages and dialects, with the
tools to built new voices efficiently and robustly as soon as we can. 
Though in the mean time, a few higher quality voices will be released
with the next version.</i>''</p>
  </blockquote>
  <p>We highly recommend you read the <a href="http://festvox.org/">FestVox</a>
documentation for creating new voices.  We plan on creating FestVox
tools that will generate FreeTTS voice data.  We are a small team,
however, and could use your help.</p>
</ul>
<ul>
  <li><a name="output_to_file"><b>How do I output synthesized speech to
an audio file?</b></a></li>
  <p>With <code>the <a href="#test_program">FreeTTS</a></code><a
 href="#test_program"> test program</a>, you can dump audio output to a
file using the <code>-dumpAudio</code> option: </p>
  <p><code><b>-dumpAudio filename</b></code></p>
  <p>The audio file format can be .wav, .au, or .aif, depending on the
file name. For example, if <code>"filename"</code> is "foo.au" the file
format will be .au. </p>
  <p>The <code><b>-dumpMultiAudio</b></code> option (same format as <code>-dumpAudio</code>)
dumps audio to multiple audio files, one file per utterance. In this
case, if <code>"filename"</code> is "foo.wav", the files are named
foo0.wav, foo1.wav, foo2.wav, etc.. Again, the file format is
determined by the extension of the filename.<br>
  </p>
  <p>If you are writing your own JSAPI application, you can select the
engine with the name "<span style="font-style: italic;">Redirected
Unlimited domain FreeTTS Speech Synthesiz<span
 style="font-style: italic;">e</span></span><span
 style="font-style: italic;">r</span>". &nbsp;When using this
synthesizer, all generated audio is sent to a file called
"freetts.wav". &nbsp;&nbsp;<br>
  </p>
  <p>If you are writing your own non-JSAPI application you can install
one of the file-based audio players. &nbsp;See the FreeTTS API
documentation for:<br>
  </p>
  <ul>
    <li><a href="./api/com/sun/speech/freetts/Voice.html">Voice</a> -
describes how to set the <a
 href="./api/com/sun/speech/freetts/audio/AudioPlayer.html">AudioPlayer</a>
for a voice.</li>
    <li><a
 href="./api/com/sun/speech/freetts/audio/SingleFileAudioPlayer.html">SingleFileAudioPlayer</a>-
an <a>AudioPlayer</a> that sends all output to a single file.</li>
    <li><a
 href="./api/com/sun/speech/freetts/audio/MultiFileAudioPlayer.html">MultiFileAudioPlayer</a>&nbsp;-
an &nbsp; <a>AudioPlayer that sends each utterance to a separate file.</a></li>
  </ul>
  <p><code></code></p>
</ul>
<ul>
  <li><a name="voices_available"><b>What voices are available?</b></a></li>
  <p>Currently, the distribution comes with these 3 voices:</p>
  <ul>
    <li>a low quality, unlimited domain, 8kHz diphone voice, called
kevin </li>
    <li>a medium quality, unlimited domain, 16kHz diphone voice, called
kevin16 </li>
    <li>a high quality, limited domain, 16kHz cluster unit voice,
called alan</li>
  </ul>
</ul>
<blockquote>FreeTTS also interfaces with the MBROLA synthesizer and can
use MBROLA voices. &nbsp;There are three US English MBROLA voices
available:</blockquote>
<ul>
  <ul>
    <li>16kHz female (mbrola1)</li>
    <li>16kHz male (mbrola2)</li>
    <li>16kHz male (mbrola3)<br>
    </li>
  </ul>
</ul>
<blockquote>See <b><a href="#Installing_MBROLA_Suppport">Installing
MBROLA Voices</a> </b>for more details on installing support for MBROLA
voices<br>
</blockquote>
<br>
<ul>
  <li><a name="is_full_jsapi"><b>Does FreeTTS provide full support for
the JSAPI 1.0 specification?</b></a></li>
  <p>No. Since FreeTTS is a speech synthesis system, none of the JSAPI
1.0 Recognition interfaces are supported. In addition, FreeTTS supports
only a subset of the JSAPI 1.0 javax.speech.synthesis specification.  
The FreeTTS support for JSAPI 1.0 has the following restrictions:</p>
  <ul>
    <li>JSML Speech Markup is ignored. FreeTTS JSAPI will process JSML,
but currently does not apply the markup to the generated speech.</li>
    <li>FreeTTS does not currently generate the <code>WORD_STARTED</code>
or the <code>MARKER_REACHED</code> events.</li>
    <li>Vocabulary management is not supported.</li>
    <li>The <code>Synthesizer.phoneme()</code> method is not
implemented.</li>
    <li>PropertyVeto exceptions are not always properly thrown when
property change requests are rejected or constrained.</li>
  </ul>
  <p>Note that the JSAPI specification is undergoing changes.  The
official work being done on JSAPI is now for JSAPI 2.0 via the Java
Community Process (JCP) under JSR-113.  Read more about the JCP and
JSR-113 at <a href="http://www.jcp.org">http://www.jcp.org.</a></p>
  <li><a name="import_voice_data"><b>How do I import new voice data
from Festival or Flite?</b></a></li>
  <p>There are a set of tools that will allow the easy importation of
voice and lexicon data from Flite to FreeTTS.  These tools are not
included in this release of FreeTTS. Future releases may include these
tools. We're also planning on working to create tools for <a
 href="http://festvox.org/">FestVox</a>&nbsp;to allow people to
generate FreeTTS voice data directly from FestVox.  We are a small
team, however, and could use your help in this area. &nbsp;There is a <a
 href="https://sourceforge.net/forum/forum.php?forum_id=142733">New
Voices FreeTTS forum</a> devoted to the creation of new voices. This
forum provides the most up to date information on generating new voices
for FreeTTS. </p>
</ul>
<ul>
  <li><a name="no_jsapi"><b>Why do I get a NoClassDefFoundError when I
try to run a demo?</b></a></li>
  <p>You probably need to install the JSAPI 1.0 specification
implementation. See <a href="#prerequisites">Prerequisites for
building and running FreeTTS</a> for more details. </p>
  <li><a name="old_java"><b>Why do I get an
UnsupportedClassVersionError when I try to run a demo?</b></a></li>
  <p>You probably are trying to run with an older (jdk 1.4) version of
the java runtime. To verify this type:</p>
  <pre>% java -version<br></pre>
You should see something like: <code>java version "1.4.0"</code> or <code>&nbsp;higher</code>.
If you see something older that this, such as <code> java version
"1.2.2" </code> then you are indeed running with an older version of
the java runtime. See <a href="#prerequisites">Prerequisites for
building and running FreeTTS</a> for more details on what is needed to
run FreeTTS.<br>
  <br>
  <li><b><a name="How_do_I_add_support_for_a_voice_with"></a>How do I
add support for a voice with language XXX?</b></li>
  <li><b><a name="How_do_I_create_a_new_voice_How_do_I_"></a><a
 name="How_do_I_create_a_new_voice_How_do_I"></a>How do I create a new
voice? How do I create a limited domain voice?</b></li>
</ul>
<blockquote>FreeTTS voices are generated from Flite voices, which are
generated from Festival voices. The document &nbsp;<a
 href="http://festvox.org/festvox/festvox_toc.html">http://festvox.org/festvox/festvox_toc.html</a>
describes the process for generating a Festival voice. &nbsp;The steps
involved in converting a Festival voice to a Flite voice are currently
not well documented. &nbsp;There is a fairly straightforward
post-processing step that converts Flite voices to FreeTTS voices. We
know of people in the FreeTTS community that have been working on
making this conversion from FestVox to FreeTTS easier, however, and
we're working with them to contribute their code/process to the open
source community.</blockquote>
<ul>
  <li><b><a name="What_does_the_message_Cant_find"></a>What does the
message "Can't find diphone xx-yy" mean?</b></li>
</ul>
<blockquote>There are approximately 45 phonemes in the English
language. &nbsp;FreeTTS uses a technique called diphone synthesis which
uses pairs of phonemes called diphones as an index into the unit
database. &nbsp;Not all phoneme combinations occur in the English
language. FreeTTS, in order to conserve space, does not include diphone
information for diphones that do not naturally occur. &nbsp;This
message indicates that FreeTTS encountered one of these omitted
diphones. This generally occurs when FreeTTS tries to speak gibberish or
non-English text.<br>
</blockquote>
<ul>
  <li><b><a name="I_get_no_sound_when_I_run_one_of_the"></a>I get no
sound when I run one of the FreeTTS demos. Why?<br>
    <br>
    </b>If you run HelloWorld or another one of the FreeTTS demos and
receive no messages, then FreeTTS thinks that everything is working
fine, but obviously its not if you are not hearing anything.Try running
another java application that uses the javax.sound APIs.  Try
downloading the javasound demo from:<br>
    <a
 href="http://java.sun.com/products/java-media/sound/samples/JavaSoundDemo/"
 target="_blank">http://java.sun.com/products/java-media/sound/samples/JavaSoundDemo/</a>
&nbsp;and make sure that it runs (and 'sounds') OK.<br>
    <br>
  </li>
  <li><b><a name="Can_I_use_FreeTTS_in_an_applet"></a>Can I use FreeTTS
in an applet?<br>
    <br>
    </b>The JSAPI layer of FreeTTS will attempt to&nbsp; access to the <font
 face="Courier New, Courier, monospace">speech.properties</font> file in
the users home directory. The applet security mechanism will not allow
such access and will throw a SecurityException if such an attempt is
made. &nbsp;It is possible to bypass this access by not using JSAPI
Central to create a synthesizer. &nbsp;A detailed discussion of this
approach is here is in the FreeTTS Help forum here: <a
 href="https://sourceforge.net/forum/message.php?msg_id=1549044">Avoiding
the need for speech.properties.</a><br>
  </li>
</ul>
<ul>
  <li><b><a name="Can_I_use_FreeTTS_with_JavaTM_Web_Start"></a>Can I
use FreeTTS with Java<sup>TM</sup> Web Start<br>
    <br>
    </b>FreeTTS includes a <a
 href="../demo/JSAPI/WebStartClock/README.html">WebStartClock demo</a>
application that demonstrates how to write a Web Start application that
uses FreeTTS. </li>
</ul>
<ul>
  <li><b><a name="What_does_the_message_Line_unavailable"></a>What does
the message "Line unavailable" mean?<br>
    <br>
    </b>This message is output when FreeTTS tries to allocate sound
resources and the requested resources are unavailable. This can occur
for a number of reasons:</li>
  <ul>
    <li>Your computer does not have any sound capabilties, or is not
allowing FreeTTS to&nbsp; access &nbsp; these capabilities</li>
    <li>Another application is using the resources and cannot share them</li>
    <li>The requested audio format is not suppported by your hardware</li>
  </ul>
  <br>
  <li><a name="where_is_recognizer"><b>Where is the speech recognizer?</b></a></li>
  <p>This is an implementation of a speech synthesizer and does not
include a speech recognizer.  Please keep your eye on the 'cmusphinx'
project on <a href="http://sourceforge.net/projects/cmusphinx/">SourceForge</a>
for developments in this area. </p>
</ul>
<hr>See the <a href="../license.terms">license terms</a> and <a
 href="../acknowledgments.txt">acknowledgments</a>.<br>
Copyright 2001, 2002 Sun Microsystems, Inc. All Rights Reserved. Use is
subject to license terms. <br>
<br>
<br>
<br>
</body>
</html>
