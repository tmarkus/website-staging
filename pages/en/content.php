      <h1>Documentation</h1>
      <div id="navigation">
	<p> Go to :
	  <a href="install.html">Install</a>
	  <a href="connect.html">Connect</a>
	  <a href="content.html">Content</a>
	  <a href="understand.html">Understand</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="http://jtcfrost.sf.net/">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="thaw.html">Thaw</a>
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Content</h2>
      <h3>Freenet as a Content Distribution System</h3>
      
      <p>
	In addition to its anonymity features, Freenet is also an
	effective way to distribute large files - often achieving
	download speeds faster than other content distribution
	systems. As a content distribution network Freenet has the
	following advantages:
	<ul>
	  <li>
	    <b>Totally decentralized</b><br/>
	    Information can be inserted into Freenet for download
	    without any reliance on a centralized server.  All the
	    inserter needs to do is give the content's "key" to
	    someone else and they will be able to download it.
	  </li>
	  <li>
	    <b>Adaptive caching</b><br/>
	    Many CDN architectures only allow peers which have already
	    downloaded a file to share it with other peers.  Freenet
	    will adaptively cache information on peers as necessary to
	    meet demand regardless of what that peer has downloaded.
	    This allows Freenet to "scale-up" much more quickly than
	    most solutions for popular files, and improves
	    load-balancing.
	  </li>
		
	  <li>
	    <b>Strong Security</b><br/>
	    Freenet has long-supported the concept of "Content Hash
	    Keys" which guarantee the integrity of retrieved data.
	    This approach has since been adopted by other
	    architectures.  Freenet also supports "Signed Subspace
	    Keys" which allow content to be digitally signed.  This
	    also allows content integrity to be guaranteed, but is
	    more flexible than CHKs.
	  </li>
	  
	  <li>
	    <b>Forward Error Correction</b><br/>
	    In-common with some other CDN architectures, Freenet
	    employs "Forward Error Correction", which allows files to
	    be reconstructed even if some of the parts of that file
	    can't be retrieved.  Uniquely, Freenet also supports
	    "healing", which involves the reconstruction and
	    reinsertion of missing file components.
	  </li>
	</ul>
	This page contains links to freely available content on
	Freenet.  If you would like to add a new link please email it
	to <a href="mailto:ian@locut.us">us</a> - remember that we
	will only link to content that can be legally distributed in
	the United States of America.
      </p>
