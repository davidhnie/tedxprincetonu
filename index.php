<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TEDx Princeton University</title>

<link rel="shortcut icon" href="favicon.ico" />

<script src="https://use.typekit.net/hrg4gxs.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">

<link rel="stylesheet" href="/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox-media").fancybox({
            helpers: {
                media: {}
            }
        });

        $('a[href^="#"]').click(function (e) {
            e.preventDefault();
            var content = e.target.hash;
            $('body').animate({scrollTop: $(content).position().top}, 500 * content.split("-")[1]);
        });
    });
</script>

</head>

<body>

	<div class="navbar">
    	<div class="navbar-inner">
			<img src="logo.png" class="logo" />
            <div class="navbar-links">
            	<!-- <a href="#panel-1">Attend</a> |  --><a href="#panel-2">2016 Talks</a> |  <a href="#panel-3">2016 Speakers</a> | <a href="#panel-4">About</a>
            </div>
        </div>
    </div>
    
    <div class="main">
        <div class="panel-inner">
        	<h1 style="font-size: 8em; padding-top: 14vh;">TEDxPrincetonU</h1>
            <h4 style="margin: 0;">Check back soon for details on TEDxPrincetonU 2017!</h4>
            <p style="line-height: 100px;"><a href="#panel-2" class="register-button">View 2016 Talks</a></p>
        </div>
    </div>
    
    <div class="panel" id="panel-1">
    	<div class="panel-inner">
    		<h2 style="font-size: 8em; font-family: Impact, Charcoal, sans-serif; text-align: center;">Panoptic</h2>
            <span style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-size: 1.7em;">[Panoptic] adjective | pan-op-tic | \pa-'näp-tik\.</span>
			<ol>
            	<li style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-size: 1.3em;">Being or presenting a comprehensive or panoramic view.</li>
            </ol>
            <p>The theme of this year's TEDxPrincetonU is <span class="emph">Panoptic</span>.  Our conference will focus on the panoptic view—envisioning all individual parts of a whole and having broad vision. From social entrepreneurship to theoretical astrophysics, panoptic vision encapsulates integration and progress. Join us, as we explore how the panoptic view will continue to shaping our future.</p>
            
            <!--<h3 style="text-align: center;">Register Now</h3>
            <p style="font-size: 1.4em;">Are you a Princeton student/staff/faculty interested in attending TEDxPrincetonU Catalyst? Register <a href="http://goo.gl/forms/Jo4QUsYMh8">here</a> beginning at 12pm on Tuesday, March 22nd. Tickets are free but limited so sign up early!</p>
        	<p style="text-align: center;"><a href="http://goo.gl/forms/Jo4QUsYMh8" class="register-button">Register Here!</a></p>-->
        </div>
    </div>

    <div class="panel schedule panel-dark" id="panel-2">
        <div class="panel-inner">
            <h2>Talks</h2>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=abQCqIbBBeM"><img src="https://img.youtube.com/vi/abQCqIbBBeM/0.jpg" /></a>
                </div>
                <div class="talk-info">
                    <h3>“Internet Voting? Really?”</h3>
                    <h4>Andrew Appel</h4>
                    <p>In this heated election year, Dr. Appel explores the history of voting and voting fraud as we have transitioned from paper ballots to mechanical voting machines. What does the future of voting and voting security look like in the United States?</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=MjHS7wmDTt8"><img src="https://img.youtube.com/vi/MjHS7wmDTt8/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“The Inspiration Paradox”</h3>
                <h4>Nusrat Ahmed</h4>
                <p>Why does Tumblr see an influx of love poems between 11pm and 2am? Why do we have major breakthroughs in the shower? Why did Sam Smith attribute his four Grammy wins to his previous heartbreak? Nusrat explores the different birthplaces of creativity, from mindfulness to sadness, and how we can apply our creativity to do good in the world.</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=ke57FOmFTxA"><img src="https://img.youtube.com/vi/ke57FOmFTxA/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“Sustaining Life with Genes &amp; Proteins Designed ‘From Scratch’”</h3>
                <h4>Michael Hecht</h4>
                <p>Proteins are molecular machines that catalyze the essential processes of life.  Thanks to recent advances in synthetic biology, it is now possible to design entirely novel proteins encoded by fully synthetic genes.  Some of these novel proteins provide life-sustaining activities in vivo.  These findings suggest that (i) the molecular toolkit for life need not be limited to genes and proteins that already exist in nature, and (ii) novel life forms sustained by artificial genomes and proteomes may soon be possible.</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=7LNEkmcR4BM"><img src="https://img.youtube.com/vi/7LNEkmcR4BM/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“Virtual Reality Storytelling”</h3>
                <h4>Kate Gardner</h4>
                <p>How is virtual reality (VR) changing the future of storytelling? Kate explores how viewers are drawn into an immersive story and why virtual reality will change the way future generations conceive of and produce stories.</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=e6iH9KWTFfo"><img src="https://img.youtube.com/vi/e6iH9KWTFfo/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“Education Through Football”</h3>
                <h4>Bob Surace</h4>
                <p>Controlling the controllables to best handle adversity, emphasizing attitude to best improve the culture of our team, and creating an obsessive competitive environment that puts the focus on personal best.</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=CQeNhXQycE0"><img src="https://img.youtube.com/vi/CQeNhXQycE0/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“Why Art Should Still Engage the Inner Life”</h3>
                <h4>Hyeseung Marriage-Song</h4>
                <p>Art can be evidence of what is universal between humans—what brings us together across different cultures, language and even time. My art may engage the intellect, but it is first and foremost designed to enrich the inner, emotional life of those who see it. And what a controversial proposition in this day and age.</p>
                </div>
            </div>

            <div class="talk">
                <div class="talk-video">
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=ZoChwo-0VzQ"><img src="https://img.youtube.com/vi/ZoChwo-0VzQ/0.jpg" /></a>
                </div>
                <div class="talk-info">
                <h3>“Taming Alcohol’s Dark Side”</h3>
                <h4>Brooks Powell</h4>
                <p>Have you ever considered the ethics surrounding humankind's relationship with matter? Attempting to use matter for our own advantage, how does the opposite sometimes occur? Using alcohol as a case study, Brooks investigates the interesting relationship between humankind and matter by exploring the various control-based relationships one can have with alcohol.</p>
                </div>
            </div>
        </div>
    </div>

	<div class="panel" id="panel-3">
    	<div class="panel-inner">
    		<h2>2016 Speakers</h2>
            <div class="speaker">
            	<img src="na17.jpg" style="height: 22vh;" /> <span class="emph">Nusrat Ahmed ‘17</span>, is a junior from the Bronx, NY majoring in Anthropology. She is passionate about children's rights, women empowerment, and entrepreneurial development. In the past, she has interned for Lawyers for Children, was a counselor for the 2015 Women in STEAM education camp in Rwanda, and lead two service projects in Bangladesh, an arts program for street children and the building of a sewing center which provides training and employment to over 400 mothers. This summer she will be interning with Goldman Sachs in Singapore, volunteering with JAAGO, a non-profit in Bangladesh that aims to eradicate poverty through free education, creating a teaching module based on mindfulness and personal development, and working with BetterStories, a social impact business dedicated to propelling Bangladesh and its people forward through the power of service entrepreneurship. She will also be researching the experiential side of Sufism in Morocco for her senior thesis. Her guilty pleasures are Mike and Ike candies, grape soda, and Keeping Up with the Kardashians.  
            </div>
            <div class="speaker">
            	<img src="aa81.jpg" style="height: 22vh; float: right;" /> <span class="emph">Andrew W. Appel ’81</span>, is Eugene Higgins Professor of Computer Science at Princeton University, where he has been on the faculty since 1986. He served as Department Chair from 2009-2015. His research is in software verification, computer security, programming languages and compilers, and technology policy. He received his A.B. summa cum laude in physics from Princeton in 1981, and his PhD in computer science from Carnegie Mellon University in 1985. He has been Editor in Chief of ACM Transactions on Programming Languages and Systems and is a Fellow of the ACM (Association for Computing Machinery). He has worked on fast N-body algorithms (1980s), Standard ML of New Jersey (1990s), Foundational Proof-Carrying Code (2000s), and the Verified Software Toolchain (2010s).   
            </div>
            <div class="speaker">
            	<img src="kg16.jpg" style="height: 22vh" /> <span class="emph">Kate Gardner ’16</span>, is passionate about helping people tell their stories and spearheading media projects that communicate beauty, truth, and human connection. She hails from Washington D.C. and is currently finishing her senior year at Princeton as an English major, writing her senior thesis on virtual reality storytelling. From her early beginnings of writing fantasy short stories inspired by narrative video games, Kate has cultivated a lifelong love of technology, storytelling, and combining the two. For her thesis, she has travelled to San Francisco, Seattle, and the Sundance Film Festival to research virtual reality hardware, meet with developers, and immerse herself in the emerging genre of narrative experiences. Coming from a creative writing and theater background, she seeks to impart vision and aspiration to the next generation of writers, storytellers, and creatives.
            </div>
            <div class="speaker">
            	<img src="mh.jpg" style="height: 22vh; float: right;" /> <span class="emph">Michael Hecht</span> grew up in Midtown Manhattan. He received a BA in Chemistry from Cornell and a Ph.D. in Biology from MIT. He then did post-doctoral research in Biochemistry at Duke Medical School. In 1990, Hecht joined the faculty at Princeton, where is a Professor of Chemistry and holds an affiliated appointment in Molecular Biology. He teaches courses ranging from Introductory Chemistry to graduate seminars on Protein Folding and Design. In addition to teaching and research, Prof. Hecht is the Head of Forbes College, one of the six undergraduate colleges at Princeton University. When not in Frick Lab or Forbes College, he spends his time traveling, skiing, inline skating, bicycling, and hiking. 
            </div>
            <div class="speaker">
            	<img src="hs01.jpg" style="height: 22vh;" /> <span class="emph">Hyeseung Marriage-Song ’01</span>, was born in Seoul, Korea, and grew up in Houston, Texas. She attended Princeton, Harvard and the Water Street Atelier, now the Grand Central Atelier, in New York City. Marriage-Song is a realist oil painter and is completing her first book, a collection of stories about her family, entitled Head Study. She lives and works in Brooklyn. <a href="http://www.hmarriage-song.com">www.hmarriage-song.com</a>
            </div>
        	<div class="speaker">
            	<img src="bp17.jpg" style="height: 22vh; float: right;" /> <span class="emph">Brooks Powell ’17</span>, is a junior in Princeton's Religion Department. He focuses primarily on ethics and ethical theory and is currently writing an independent paper on the Christian ethics of alcohol. During a neuroscience class his sophomore year, Brooks came across recent literature in the Journal of Neuroscience revealing properties of a naturally occurring organic compound that mitigates chemical withdrawal and tolerance to alcohol. Working with a pharmaceutical company to turn this into a consumer product, Brooks started a company called Thrive+. Since launching his junior fall, Thrive+ has been covered by The Huffington Post, Inc. Magazine, The Trenton Times, and more. Thrive+’s customers include currently competing US Olympic gold medalists, professional baseball players, and Oxford Ph.D. students. Being right in the middle of alcohol’s $200+ billion dollar industry, Brooks thinks a lot about the ethics surrounding humankind’s interaction with alcohol. 
            </div>
            <div class="speaker">
            	<img src="bs90.jpg" style="height: 22vh;" /> <span class="emph">Bob Surace '90</span>, a man who both won an Ivy League title as an All-Ivy center and met his future wife while at Princeton, returned to his beloved alma mater on Dec. 23, 2009 with the goal of restoring the football program to its past glory. Within four seasons, he achieved that mark in record-breaking fashion, and he has kept the Tigers as championship contenders ever since. Surace has placed 52 players on the last four All-Ivy League teams. A former NFL assistant coach at Cincinnati, Surace has also seen two top defensive linemen — Mike Catapano and Caraun Reid — get selected in the NFL Draft over the last four years. Surace guided Princeton to a historic 2013 Ivy League championship; the Tigers set Ivy League records in both total offense and scoring offense, and placed a league-best 17 players on the All-Ivy League team. 
            </div>
        </div>
    </div>

	<div class="panel panel-dark" id="panel-4">
    	<div class="panel-inner">
    		<h2>About</h2>
            <p><b>What is TEDxPrincetonU?</b></p>
			<p>At its heart, TED is about storytelling. TEDxPrincetonU provides a platform for the Princeton University community to share their ideas worth spreading. Filled with inspiration, innovative ideas, and passion, TEDxPrincetonU aims to bring a unique TED-like experience to Princeton’s campus. We strive to feature fascinating speakers and ideas to foster discussions, which we hope will spark new ideas and opportunities across a variety of disciplines.</p>
			<p>Our work is supported by Princeton Social Innovation. Learn more about PSI <a href="http://www.princetonsi.com">here</a>!</p>

			<p><b>What is TEDx?</b></p>
			<p>In the spirit of ideas worth spreading, TED has created a program called <a href="http://www.ted.com/about/programs-initiatives/tedx-program ">TEDx</a>. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDx[name], where x = independently organized TED event. At our TEDx[name] event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>
			
            <p><b>What is TED?</b></p>
            <p>TED is a nonprofit organization devoted to Ideas Worth Spreading. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world's leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, at TED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman.</p>
			<p>The annual TED Conference takes place each spring in Vancouver, British Columbia, along with the TEDActive simulcast event in nearby Whistler. TED's media initiatives include TED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.</p>
			<p>Follow TED on <a href="http://twitter.com/TEDTalks">Twitter</a>, or on <a href="http://www.facebook.com/TED">Facebook</a>.</p>
        </div>
    </div>
    
    <div class="footer">
    This independent TEDx event is operated under license from TED.<br />&copy; 2016 Princeton Social Innovation
    </div>

</body>
</html>