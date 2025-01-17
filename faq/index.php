<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>grml.org - FAQ</title>
<meta name="Title" content="grml.org - FAQ" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="FAQ of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/faq/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../static.inc'; ?>

      <div class="content">

        <p><img style="float: right" src="/img/clanbomber.png" alt="*" /></p>

        <h1 align="center">FAQ for grml</h1>

        <p><strong>Up2date:</strong> applies to Grml releases version 2011.12</p>

        <p><a name="toc"></a><strong>Index:</strong></p>

        <p class="toc"><a href="#general">General:</a></p>
        <ol>
          <li><a href="#whatis">What is Grml?</a></li>
          <li><a href="#flavours">What are grml32 / grml64 and grml96?</a></li>
          <li><a href="#get">Where do I get Grml?</a></li>
          <li><a href="#whatmeans">What does Grml mean?</a></li>
          <li><a href="#releasename">What about the release name?</a></li>
          <li><a href="#requirements">Requirements for running Grml</a></li>
          <li><a href="#bootoptions">Which bootoptions does Grml support?</a></li>
          <li><a href="#known_issues">Are there any known issues with this release? How about reporting bugs?</a></li>
        </ol>

        <p class="toc"><a href="#features">Features</a>:</p>
        <ol>
          <li><a href="#usbboot">How do I boot Grml from a USB stick?</a></li>
          <li><a href="#persistency">Is it possible to store my settings?</a></li>
          <li><a href="#password">What are the passwords of users on Grml?</a></li>
          <li><a href="#version">How do I find out the version of Grml</a></li>
          <li><a href="#language">How do I change the language/keyboard settings?</a></li>
          <li><a href="#wms">Which window managers can I use?</a></li>
          <li><a href="#lvm">Where are my LVM devices?</a></li>
          <li><a href="#swraid">Where are my Software-RAID devices?</a></li>
          <li><a href="#booting">Which ways exist to boot Grml?</a></li>
          <li><a href="#timezone">How do I configure timezone on my Grml system?</a></li>
          <li><a href="#hdinstall">Is it possible to install Grml to harddisk?</a></li>
        </ol>

        <p class="toc"><a href="#software">Software:</a></p>
        <ol>
          <li><a href="#sw_version">Which package(s) and which version is available?</a></li>
          <li><a href="#zsh">Why is Zsh the default shell?</a></li>
        </ol>
        </ol>

        <p class="toc"><a href="#stuff">Support / Unanswered stuff:</a></p>
        <ol>
          <li><a href="#questions">Further questions?</a></li>
          <li><a href="#support">Commercial Support</a></li>
        </ol>

        <h2><a name="general"></a><a href="#toc">General</a></h2>

        <h3><a name="whatis"></a><a href="#toc">What is Grml?</a></h3>

        <p>Grml is a bootable CD (Live-CD) based
        on <a href="http://www.debian.org/">Debian</a>. It is not
        necessary to install anything to a harddisk. Grml includes a
        collection of GNU/Linux software especially for system
        administrators. It specializes on administrative tasks like
        installation, deployment and system rescue.</p>

	<h3><a name="flavours"></a><a href="#doc">What are grml32 / grml64 and grml96?</a></h3>

        <ul>
          <li>grml32: 32bit version (kernel and userspace)</li>
          <li>grml64: 64bit version (kernel and userspace)</li>
          <li>grml96: multi boot version (featuring grml32 and grml64 on one ISO)</li>
        </ul>

	<p>Unless you've a good reason to really choose the 32bit flavour we
	strongly encourage you to use either the grml64 or the grml96
	flavour.</p>

	<p>Please notice that this schema was introduced starting with Grml
	release 2011.12. Until then grml96 didn't exist and grml32 was known as
	just 'grml'.</p>

        <h3><a name="get"></a><a href="#toc">Where do I get Grml?</a></h3>

        <p>Grml is open source, you can download it from the mirrors
        listed at <a href="/download">grml.org/download/</a>.</p>

        <h3><a name="whatmeans"></a><a href="#toc">What does Grml mean?</a></h3>

        <p>Grml comes close to 'argl' or 'grrr' in English. People use
        this when they want to express their dissatisfaction with
        software (amongst other things).</p>

        <h3><a name="releasename"></a><a href="#toc">What about the release name?</a></h3>

        <p>Codename of Grml 2011.12 is "Knecht Rootrecht". It's a wordplay on
        <a href="http://en.wikipedia.org/wiki/Companions_of_Saint_Nicholas">Knecht
        Ruprecht</a>, which translates as Farmhand Ruprecht or Servant
        Ruprecht.</p>

        <h3><a name="requirements"></a><a href="#toc">Requirements for running Grml</a></h3>

        <ul>

          <li>Intel-compatible CPU (i586 or later, preferably Pentium class or higher)</li>

          <li>&gt;=128MB of RAM (&gt;=256MB recommended)</p>

          <li>either a bootable CD-/DVD-ROM drive,
          a <a href="#usbboot">USB-boot capable system</a> or a
          network card for booting via network/PXE (check
          out <a href="#terminalserver">grml-terminalserver</a>)</li>

        </ul>

        <h3><a name="accessibility"></a><a href="#toc">What does accessibility at Grml mean?</a></h3>

	<p>The Grml kernel includes support for speakup. For software,
	brltty and espeakup are included.</p>

        <h3><a name="bootoptions"></a><a href="#toc">Which bootoptions does Grml support?</a></h3>

        <p>Check out the <a
        href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">grml-cheatcodes
        file</a> (also available via <a href="http://grml.org/cheatcodes/">grml.org/cheatcodes/</a>). Of
        course <a
        href="http://www.kernel.org/doc/Documentation/kernel-parameters.txt">kernel-parameters.txt</a>
        of the Linux kernel applies to Grml as well.</p>

        <a name="release"></a> <!-- old anchor -->
        <a name="bugreport"></a> <!-- old anchor -->
        <h3><a name="known_issues"></a><a href="#toc">Are there any known issues? How about reporting bugs?</a></h3>

        <p>Please visit the <a href="/bugs/">bug webpage</a>.</p>

        <h2><a name="features"></a><a href="#toc">Features</a></h2>

        <!-- TODO: needs to be improved! -->
        <h3><a name="usbboot"></a><a href="#toc">How do I boot Grml from a USB stick?</a></h3>

        <p>Check
        out <a href="http://wiki.grml.org/doku.php?id=usb#grml2usb">grml2usb</a>
        at the
        <a href="http://wiki.grml.org/doku.php?id=usb">usb webpage in the
        grml-wiki.</a></p>

        <h3><a name="store"></a><a name="persistency"></a><a href="#toc">Is it possible to store my settings?</a></h3>

        <p>Yes, using the
        a <a href="http://wiki.grml.org/doku.php?id=persistency">persistency
        feature</a>.</p>

        <h3><a name="password"></a><a href="#toc">What are the passwords of users on Grml?</a></h3>

        <p>There are no default passwords - all accounts are locked by
        default for security reasons. Even local logins are not
        possible (unless you set a password or create new user
        accounts as root). You can create valid passwords using "sudo
        passwd [username]" from the shell individually. To set a password
        for the Grml user and enable SSH login you can use the 'ssh'
        boot option, like 'ssh=yourpassword'.</p>

        <h3><a name="version"></a><a href="#toc">How do I find out the version of Grml</a></h3>

        <p>Run 'grml-version' or use the following command:</p>

<pre class="rahmen">
$ cat /etc/grml_version</pre>

        <h3><a name="language"></a><a href="#toc">How do I change the language/keyboard settings?</a></h3>

        <p>By default Grml uses english settings. But it is possible to
        change the settings via using either the bootparam(s) lang,
        keyboard and xkeyboard or via executing grml-lang when Grml is
        already running. Usage examples:</p>

<pre class="rahmen">
grml lang=de      # enter this at the bootprompt and you will get
                  # german keyboard layout and german $LANG, $LC_ALL,
                  # $LANGUAGE...
grml keyboard=de xkeyboard=de lang=at # enter this at the bootprompt
                  # and you will get german keyboard and austrian
                  # language variables
% grml-lang de    # enter this in the shell to switch keyboard layout
                  # and $LANG settings in a running Grml system
</pre>

        <p>Note: run grml-setlang to get a dialog based frontend for
        /etc/default/locale. Run grml-setkeyboard to get a dialog
        based frontend for /etc/sysconfig/keyboard.</p>


        <h3><a name="wms"></a><a href="#toc">Which window managers can I use?</a></h3>

	<p>Starting with the 2011.12 release Grml provides <a
	href="http://www.fluxbox.org/">Fluxbox</a> as window manager.</p>

        <h3><a name="lvm"></a><a href="#toc">Where are my LVM devices?</a></h3>

        <p>LVM (Logival Volumes) is <strong>not</strong> started by default to
        avoid any possible damage to your data. To get access to present LVM
        devices just execute:</p>

<pre class="rahmen">
# /etc/init.d/lvm2 start
</pre>

        <p>If you want to enable LVM by default just boot using the 'lvm'
        bootoption which automatically enables LVM.</p>

        <h3><a name="swraid"></a><a href="#toc">Where are my Software-RAID devices?</a></h3>

        <p>Software-RAID (usually known as the mdadm stuff) is
        <strong>not</strong> started by default to avoid any possible damage to
        your data. To get access to present SW-RAID devices just execute:</p>

<pre class="rahmen">
# /etc/init.d/mdadm-raid start
</pre>

        <p>If you want to enable SW-RAID by default just boot using
        the 'swraid' bootoption which enables automatic assembling of
        software raid arrays.</p>

        <a name="terminalserver"></a>
        <h3><a name="booting"></a><a href="#toc">Which ways exist to boot Grml?</a></h3>

        <!-- TODO: needs rework -->

        <p>Of course running from CD/DVD is a common way to boot
        Grml. But Grml provides many more ways to boot:</p>

        <p>It is possible to boot Grml via USB (e.g. USB stick or
        harddisk), firewire, or running from a Compact Flash disk. It
        works out of the box; you don't need to modify anything. Check
        out <a href="http://wiki.grml.org/doku.php?id=usb">the usb
        webpage in the grml-wiki</a> for more details.</p>

        <p>Your computer can not boot from CD-ROM but provides a
        floppy disk? Take a look
        at <a href="http://btmgr.sourceforge.net/">btmgr</a>, <a href="http://ubcd4win.com/faq.htm#floppy">ubcd4win</a>
        or <a href="http://linux.simple.be/tools/sbm">sbm</a>. They
        provide support for booting from CD-ROM via a special floppy
        disk.</p>

        <p>grml-terminalserver makes it possible to boot your system
        via network
        using <a href="http://en.wikipedia.org/wiki/Preboot_Execution_Environment">PXE</a>
        (Preboot Execution Environment). If your network card does not
        provide support for booting via PXE you can still boot it
        either using the provided grub image by grml-terminalserver
        (for example via floppy drive) or
        using <a href="http://etherboot.org/wiki/index.php">gPXE</a>.
        For more information, refer to
        the <a href="/terminalserver/">grml-terminalserver
        webpage</a>.</p>

        <h3><a name="timezone"></a><a href="#toc">How do I configure
        timezone on my Grml system?</a></h3>

        <p>Available bootoptions relevant in live-cd mode:</p>

        <ul>
          <li>utc: set UTC, if your system clock is set to UTC (GMT)
          <li>gmt: set UTC, if your system clock is set to UTC (GMT) [like bootoption utc]
          <li>tz=$option: set timezone to corresponding $option, usage example:
              tz=Europe/Vienna
        </ul>

        <p>Further information: manpages hwclock(8), tzselect(1) and tzconfig(8); <a
        href="http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html">Debian
        GNU/Linux System Administrator's Manual Chapter 16 - Time</a> and <a
        href="http://wiki.debian.org/TimeZoneChanges">TimeZoneChanges in the
        Debian-Wiki</a>.</p>

        <h3><a name="hdinstall"></a><a href="#toc">Is it possible to install Grml to harddisk?</a></h3>

        <p>Short anwer: No.</p>

	<p>If you want to get a plain Debian system take a look at <a
	href="/grml-debootstrap/">grml-debootstrap</a>.</p>

	<p>Long(er) answer: yes it's possible to install Grml. But it's not
	supported and you'll be on your own. That's why we decided to make it
	not-so-obvious. If you really know what you're doing you'll find out on
	your own. Reminder: use <a
	href="/grml-debootstrap/">grml-debootstrap</a> or <a
	href="http://www.debian.org/">Debian Installer</a> instead.</p>

        <h2><a name="software"></a><a href="#toc">Software</a></h2>

        <h3><a name="sw_version"></a><a href="#toc">Which package(s) and which
        version is available?</a></h3>

        <p>If you want to get details about the provided packages and the
        package versions without booting the Grml ISO check out the dpkg_...
        files in the <a href="/files/#debian">Debian-Information section on
        grml.org/files/</a>.</p>

        <h3><a name="zsh"></a><a href="#toc">Why is Zsh the default shell?</a></h3>

        <p>Short answer: because <a href="/zsh/">Zsh rocks</a>, really!</p>

	<p>Long(er) answer: If you don't know Zsh take a look the <a
	href="/zsh/">Grml Zsh reference	card</a>.</p>

        <p>If you are a Bash user and don't know Zsh yet, don't be
        afraid. Bash is largely a subset of Zsh and you don't have to
        throw away your knowledge about shell stuff.</p>

        <h2><a name="stuff"></a><a href="#toc">Support / Unanswered stuff</a></h2>

        <h3><a name="questions"></a><a href="#toc">Further questions</a></h3>

        <p>Do you have a question which is not answered in the FAQ or
        in the provided <a href="/docs/">documentation</a> (execute
        &quot;grml-info&quot; on your Grml system for offline
        documentation)?  Also check out 'grml-tips $KEYWORD' on your
        Grml system. Take a look at
        <a href="/">the Grml website</a> and <a href="http://wiki.grml.org/">the
          grml-wiki</a>. A good place to become part of the community is the <a
          href="/mailinglist/">Grml mailinglist</a>.</p>

        <h3><a name="support"></a><a href="#toc">Commercial Support</a></h3>

        <p>You want to deploy Grml in your data center, use it as part of your
        business or have an emergency case? You're happy with Grml but would
        like to get your very own live cd (providing your favourite software
        selection, special configuration, setup and your bootsplash)?
        Please get in <a href="/contact/">touch with us</a>.</p>

      </div>

<?php include '../static_bottom.inc'; ?>
