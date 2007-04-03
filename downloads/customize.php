<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../set_my_root.php';
require '../nhp.php';

$version = "1.0_20040424";
$thisUrl = $_SERVER["REQUEST_URI"];
$stepText = array(
	"0" => "generate output netrekrc",
	"1" => "introductionary story",
	"2" => "window setup, dashboard setup, messaging setup, playerlist setup",
	"3" => "keymap setup",
	"4" => "sound setup",
	"5" => "bitmap setup",
	"6" => "weapon visuals setup",
	"7" => "communication setup. tcp/udp/fat/updates",
	"8" => "misc setup. agricolor/caps",
	"9" => "metaserver menu. ping/statuslevel/metaserver"
	);
$step = $_GET['s'];
if ( $stepText[$step] == "" ) { $step = 1; }

if ( $step != 0 )
{
	doNhpHeader();

	// echo getSidebarDownload();
	echo getSidebarHints();
	// echo getSidebarNews();
	// echo getSidebarColofon();

	echo "</div>\n\n<div id=\"content\">";

	echo "<h1>Netrekrc Configuration Tool - Step $step</h1>\n<p>\n<h2>$stepText[$step]</h2>\n";
}
else
{
	header("Content-Type: text/plain; charset=utf-8");
	echo "
# NETREKRC Configuration File
#
# Generated by the Netrekrc Configuration Tool version $version
# See http://www.netrek.org/downloads/customize.php
#
# This Netrekrc was generated on 24 Apr 2004 with the following URL:
# http://www.netrek.org$thisUrl


";
}


if ( $step == 1 )
{
	echo "
It is possible to customize your Netrek client to a great amount.
this involves tweaking a myriad of options in a file named \"<tt>netrekrc</tt>\",
which can usually be found in the same directory as your Netrek client.
</p>

<p>
Here are a few example netrekrc files from well known players:
<ul>
	<li>Player 1</li>
	<li>Player 2</li>
</ul>
</p>
";
}


if ( $step == 2 )
{
	echo "It is possible to customize your Netrek client to a great amount. blah. ";
}


if ( $step == 0 )
{
	echo "
# Show AGRI planet names in caps on map
agriCAPS: on
"; }


if ( $step == 0 )
{
	echo "
# Color of AGRI planet name on the map
# 0 - owner race color
# 1 - white
# 2 - gray
agriColor: 2
"; }


if ( $step == 0 )
{
	echo "
# Autoquit timer (default 60)
autoQuit: 180
"; }


if ( $step == 0 )
{
	echo "
# Base UDP local port
baseUdpLocalPort: 0
"; }


if ( $step == 0 )
{
	echo "
# What type of ship bitmaps to load
# 0 - mono
# 1 - color (default)
colorClient: 1
"; }


if ( $step == 0 )
{
	echo "
# Display color phasers
colorfulPhasers: off
"; }


if ( $step == 0 )
{
	echo "
# Show tractor/pressor after lock
continueTractor: on
"; }


if ( $step == 0 )
{
	echo "
# Use mouse for continuous steering
continuousMouse: on
"; }


if ( $step == 0 )
{
	echo "
# Enable internal windows moving
windowMove: off
"; }


if ( $step == 0 )
{
	echo "
# Angle between enemy phaser lines
# 1-10 range
enemyPhasers: 1
"; }


if ( $step == 0 )
{
	echo "
# Extend alter borders
extraAlertBorder: on
"; }


if ( $step == 0 )
{
	echo "
# Number of colors the client will display
# 0 - mono
# 1 - 16 colors
# 2 - 256 colors
# 3 - true color (default)
forceDisplay: 3
"; }


if ( $step == 0 )
{
	echo "
# Force old bitmaps
forceMono: off
"; }


if ( $step == 0 )
{
	echo "
# Highlight friendly phasers
highlightFriendlyPhasers: off
"; }


if ( $step == 0 )
{
	echo "
# Ignore Caps Lock key state
ignoreCaps: on
"; }


if ( $step == 0 )
{
	echo "
# How much updates to keep info window on (default 15)
keepInfo: 15
"; }


if ( $step == 0 )
{
	echo "
# Keep peace with enemy team after death
keepPeace: on
"; }


if ( $step == 0 )
{
	echo "
# Log all messages to file. Requires 'logfile' option
logging: off
"; }


if ( $step == 0 )
{
	echo "
# Make main window resizeable
mainResizeable: off
"; }


if ( $step == 0 )
{
	echo "
# Message hold threshold
messageHoldThresh: 0
"; }


if ( $step == 0 )
{
	echo "
# Output message to local window while typing
# 0 - nowhere
# 1 - top of the window
# 2 - bottom of the window
messageHUD: 0
"; }


if ( $step == 0 )
{
	echo "
# Metaserver port
metaPort: 3521
"; }


if ( $step == 0 )
{
	echo "
# What servers to get from metaserver
# 0 - with players
# 1 - as above + with queue
# 2 - as above + with nobody playing
# 3 - as above + timed out servers (default)
# 4 - as above + servers that metaserver could not connect to
metaStatusLevel: 2
"; }


if ( $step == 0 )
{
	echo "
# Use ICMP to ping the metaserver list
metaPing: on
"; }


if ( $step == 0 )
{
	echo "
# Mouse motion threshold
motionThresh: 0
"; }


if ( $step == 0 )
{
	echo "
# Use mouse buttons as Shift keys
mouseAsShift: off
"; }


if ( $step == 0 )
{
	echo "
# Paint dark scrollbars
mungScrollbarColors: off
"; }


if ( $step == 0 )
{
	echo "
# Type of dashboard
# 0 - Text
# 1 - COW
# 2 - KRP (default)
# 3 - LABs
newDashboard: 2
"; }


if ( $step == 0 )
{
	echo "
# Indent RCD messages
newDistress: off
"; }


if ( $step == 0 )
{
	echo "
# Add space between teams in player list
partitionPlist: off
"; }


if ( $step == 0 )
{
	echo "
# Window to write phaser messages to
# 0 - none
# 1 - all
# 2 - team
# 3 - indiv
# 4 - kill
# 5 - total (default)
phaserMsg: 5
"; }


if ( $step == 0 )
{
	echo "
# Shrink our phaser by x/16 of its length
# 0-16 range for COW style phaser shrink
# 0-11 range for BRMH style phaser shrink
phaserShrink: 16
"; }


if ( $step == 0 )
{
	echo "
# Style of phaser srhinkage
# 0 - COW style
# 1 - BRMH style
phaserShrinkStyle: 1
"; }


if ( $step == 0 )
{
	echo "
# Log phaser statistics
phaserStats: off
"; }


if ( $step == 0 )
{
	echo "
# Show phaser window
phaserWindow: off
"; }


if ( $step == 0 )
{
	echo "
# Type of planet bitmaps
# 0 - Bronco (default)
# 1 - Moo
# 2 - Rabbitear
planetBitmap: 0
"; }


if ( $step == 0 )
{
	echo "
# Suppose that players with letter greater than 'f' are observers
playerListHack: off
"; }


if ( $step == 0 )
{
	echo "
# What kind of players to list
# 0 - all (default)
# 1 - players
# 2 - observers
playerListObserver: 1
"; }


if ( $step == 0 )
{
	echo "
# Predefined player list
# 0 - use style from playerList
# 1 - old style 'nTRNKWLr O D d'
# 2 - COW style 'nTR N  K lrSd' (default)
# 3 - kill watch style 'nTK  RNlr Sd'
# 4 - BRMH style 'nTR N  K l M'
playerListStyle: 3
"; }


if ( $step == 0 )
{
	echo "
# Port to connect
port: 2593
"; }


if ( $step == 0 )
{
	echo "
# Use new UDP code
portSwap: on
"; }


if ( $step == 0 )
{
	echo "
# Number of updates before redraw
redrawDelay: 0
"; }


if ( $step == 0 )
{
	echo "
# Reject macros
rejectMacro: off
"; }


if ( $step == 0 )
{
	echo "
# Report kills
reportKills: on
"; }


if ( $step == 0 )
{
	echo "
# Save options with comments
saveBig: on
"; }


if ( $step == 0 )
{
	echo "
# Save macros to saveFile
saveMacro: on
"; }


if ( $step == 0 )
{
	echo "
# Save RCD to saveFile
saveRCD: on
"; }


if ( $step == 0 )
{
	echo "
# Save RCM to saveFile
saveRCM: on
"; }


if ( $step == 0 )
{
	echo "
# Enable shell tools
shellTools: on
"; }


if ( $step == 0 )
{
	echo "
# Shift+Mouse gives additional commands
shiftedMouse: off
"; }


if ( $step == 0 )
{
	echo "
# Show tractor/pressor for all players
# This option actually helps to turn the feature off
# Server god decides wether to enable it on server
showAllTractorPressor: on
"; }


if ( $step == 0 )
{
	echo "
# Show hints window
showHints: off
"; }


if ( $step == 0 )
{
	echo "
# Show hockey lines on map
# Works only on hockey server
showHockeyLinesMap: off
"; }


if ( $step == 0 )
{
	echo "
# Show hockey lines on local
# Works only on hockey server
showHockeyLinesLocal: off
"; }


if ( $step == 0 )
{
	echo "
# Cross independent planets with X
showIND: off
"; }


if ( $step == 0 )
{
	echo "
# Where to show lock triangle
# 0 - nowhere
# 1 - map
# 2 - local
# 3 - both (default)
showLock: 3
"; }


if ( $step == 0 )
{
	echo "
# Show MOTD before login
showMotd: on
"; }


if ( $step == 0 )
{
	echo "
# Show my speed on local
showMySpeed: on
"; }


if ( $step == 0 )
{
	echo "
# Show planet names on local
showPlanetNames: on
"; }


if ( $step == 0 )
{
	echo "
# Show planet owner on galaxy
showPlanetOwner: off
"; }


if ( $step == 0 )
{
	echo "
# Show statistics window
showStats: on
"; }


if ( $step == 0 )
{
	echo "
# Draw lines for tractor/pressor
showTractorPressor: on
"; }


if ( $step == 0 )
{
	echo "
# Shrink phasers if missed
shrinkPhaserOnMiss: off
"; }


if ( $step == 0 )
{
	echo "
# Put my team first in the player list
sortMyTeamFirst: off
"; }


if ( $step == 0 )
{
	echo "
# Sort players by team
sortPlayers: on
"; }


if ( $step == 0 )
{
	echo "
# Shrink enemy phaser by x/16 of its length
# 1-16 range
theirPhaserShrink: 0
"; }


if ( $step == 0 )
{
	echo "
# Distance between tractor/pressor dots
tpDotDist: 10
"; }


if ( $step == 0 )
{
	echo "
# Use short packets for communications
tryShort: on
"; }


if ( $step == 0 )
{
	echo "
# Use UDP for communications
tryUdp: on
"; }


if ( $step == 0 )
{
	echo "
# Type of incoming UDP traffic
# 0 - TCP
# 1 - simple UDP (default)
# 2 - fat UDP
udpClientReceive: 2
"; }


if ( $step == 0 )
{
	echo "
# Type of outgoing UDP traffic
# 0 - TCP
# 1 - simple UDP (default)
# 2 - enforced UDP (state)
# 3 - enfotrced UDP (state & weapons)
udpClientSend: 3
"; }


if ( $step == 0 )
{
	echo "
# Print UDP debug information
udpDebug: 0
"; }


if ( $step == 0 )
{
	echo "
# Check sequence of UDP traffic
udpSequenceCheck: on
"; }


if ( $step == 0 )
{
	echo "
# How much updates to send/receive
# 1-10 range
updatesPerSec: 10
"; }


if ( $step == 0 )
{
	echo "
# Use RSA verification
useRsa: on
"; }


if ( $step == 0 )
{
	echo "
# Change shields color on ship damage
varyShields: on
"; }


if ( $step == 0 )
{
	echo "
# Change shields color on enemy approach
warnShields: off
"; }


if ( $step == 0 )
{
	echo "
# Mouse button mapping
buttonmap: 1T2p
"; }


if ( $step == 0 )
{
	echo "
# Two characters to show cloaked player on map window
cloakChars: ??
"; }


if ( $step == 0 )
{
	echo "
# Key mapping
keymap: #%$%0%32435%HhTtWwdee%hHq[rytTurw] d
"; }


if ( $step == 0 )
{
	echo "
# Key to switch to macro mode
# TAB, ESC could be used too
macroKey: s
"; }


if ( $step == 0 )
{
	echo "
# Custom style for player list
# ' ' - White Space
# 'b' - Armies Bombed
# 'd' - Damage Inflicted (DI)
# 'k' - Max Kills
# 'l' - Login Name
# 'n' - Ship Number# 'p' - Planets Taken
# 'r' - Ratio
# 's' - Speed
# 'v' - Deaths per hour
# 'w' - War staus
# 'B' - Bombing
# 'C' - Curt (short) rank
# 'D' - Defense
# 'H' - Hours Played
# 'K' - Kills
# 'L' - Losses
# 'M' - Display, Host Machine
# 'N' - Name
# 'O' - Offense
# 'P' - Planets
# 'R' - Rank
# 'S' - Total Rating (stats)
# 'T' - Ship Type
# 'V' - Kills per hour
# 'W' - Wins
playerList: nTK  RNlr Sd
"; }



if ( $step == 0 )
{
	echo "
# Macros section
# Also '?' can still not be used as a macro key. The following definitions will
# work in a macro (where 'target x' = whatever x the mouse cursor is closest to
# when the macro is sent):
#
#      Standard:
#
#      %a   armies carried by sender
#      %d   sender damage percentage
#      %s   sender shield percentage
#      %f   sender fuel percentage
#      %w   sender wtemp percentage
#      %e   sender etemp percentage
#      %t   team id character of target planet
#      %T   team id character of sender team
#      %c   sender id character
#      %n   armies on target planet
#      %E   1 if etemped, 0 if not
#      %W   1 if wtemped, 0 if not
#      %S   sender two character ship type
#      %p   id character of target player
#      %g   id char of target friendly player
#      %h   id char of target enemy player
#      %P   id character of player nearest sender
#      %G   id char of friendly player nearest sender
#      %H   id char of enemy player nearest sender
#      %l   three character name of target planet
#      %i   sender full player name (16 character max)
#      %u   full name of target player (16 character max)
#      %z   3 letter team id of target planet
#      %b   planet nearest sender
#      %o   three letter team name of sender
#      %k   number of kills sender has
#      %K   number of kills target player has
#      %*   if this is encountered, the macro IS NOT PRINTED
#      %(SPACE)  this is replaced by a space, mainly useful for starting a message
#
#
#      FULLY CAPITALIZED:
#
#      %L   three character name of target planet
#      %I   sender full player name (16 character max)
#      %U   full name of target player (16 character max)
#      %Z   3 letter team id of target planet
#      %B   sender nearest planet
#      %O   three letter team name of sender
#
#      Ping stats: (may differ slightly from server '!' ping stats)
#
#      %v   average ping stat round trip time
#      %V   ping stat round trip standard deviation
#      %y   percent total packet loss as calculated by server formula
#
#      Miscellanous:
#
#      %m   the last message you sent
#      %M   the last message you sent in all caps
#
# As a further extension to NEWMACRO, a macro may now be sent to any of the following destinations:
#      %i %I %c  send message to self
#      %u %U %p  send message to player nearest mouse
#      %t %z %Z  send message to team of player nearest mouse
#      %g        send message to nearest friendly player to my ship
#      %h        send message to nearest enemy player to my ship
#
#      with a syntax like
#
#      #useful for INL...
#      mac.C.%i: CAPTAIN
#      mac.N.%i: NEWGALAXY
#      mac.S.%i: START
#      mac.T.%i: %Z
#
#      mac.W.%t: SHUT UP, TWINKS!!
#      mac.I.%u: %u: det when you escort!
#      mac.O.%u: (%i) ogging
#
# What this does is allows you to send a macro to a player or team specified by your mouse
# location instead of requiring a 3rd character to be input. Also, it allows you to send
# message to yourself without having to actual sit there and figure out who you are (they
# tried and failed back in the '60s).
#
# Further, tests may be done within the macro system, the syntax for these test is as follows.
#
#      %?   introduces a test
#      =    equivalence
#      >    greater
#      <    less
#
# Expressions are evaluated on a character by character basis until the test is resolved.
# The text of the test is then replaced in the macro by 1 or 0.
#
# Test are then fed to a syntax I call conditional text. The best way to demonstrate
# how this works is example.
#
#      '1%{included if true%!included if false%}'
#
#      This would print:
#
#      'included if true'
#
#      whereas
#
#      '0%{included if true%!included if false%}'
#
#      would print:
#
#      'included if false'
#
# Combining the whole package, a very robust macroing system is quickly generated.
# One can easily design or mimic Distress calls, including the variable NBT
# distress of the BRM client and all the hardcoded message macroing built into my
# own client but never released.
#
# Here are a few more samples to work from:
#
#      mac.F.T:   Help!  Carrying %a!!
#      mac.f:     Help!  Carrying %a!!
#      mac.c.T:   %p++ near %l
#      mac.b.T:   %?%n>4%{bomb %l at %n%!bomb%}
#      mac.d.T:   %E%{%!%W%{%!I'm fine.  How are you? %}%}%E%{ETEMPED!!!  %}
#                 %W%{WTEMPED!!!  %}Carrying %?%a>0%{%a armies!%!NO armies.%}
#      mac.a.T:   %E%{ETEMPED!!!  %}%W%{WTEMPED!!!  %}Carrying %?%a>0%{%a
#                 armies! %!NO armies.%}
#      mac.R.A:   I'm a %?%S=SB%{star base!%!twink!%}
#      mac.K.A:   KissMy%S
#      mac.t:     thanks
#      mac.y:     yes
#      mac.n:     no
#      mac.B:     bye, getting hungry/sleep/horny
#      mac.e.T:   need escort going to %l%?%a>0%{, carrying %a armies!%}
#      mac.v.%t   %T%c PING stats: Average: %v ms, Stdv: %V ms, Loss: %y%%
"; }



if ( $step != 0 )
{
	$previousStep = $step - 1;
	$previousStepText = "<li>Previous: <a href=\"customize.php?s=$previousStep\">Step $previousStep - " . $stepText[$previousStep] . "</a>.</li>";
	if ( $previousStep == 0 )
	{
		$previousStepText = "";
	}

	$nextStep = $step + 1;
	$nextStepText = "<li>Next: <a href=\"customize.php?s=$nextStep\">Step $nextStep - " . $stepText[$nextStep] . "</a>.</li>";
	if ( $stepText[$nextStep] == "" )
	{
		$nextStepText = "";
	}

	$finishText = "<li><a href=\"customize.php?s=0\">Finish and generate my <tt>netrekrc</tt> file</a>.</li>";

	echo "<p>\n<ul>\n$nextStepText\n$previousStepText\n$finishText\n</ul></p>";

	echo "</div>\n";
	echo getFooter();
}

?>
