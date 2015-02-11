<!DOCTYPE html>

<html lang="en">
    
    <?php require 'includes/_htmlhead.php'; ?>

    <style>
        .front-cover {
            max-width: 980px;
            margin:0 auto;
            padding: 50px 100px;
        }

        ul {
            padding: 0 0 0 20px;
        }
        ul li ul {
            padding: 0 0 20px 40px;
        }
        h1 {
            font-size: 20px;
            padding: 50px 0 20px 0;
        }
        li {
            font-size 14px;
            line-height: 1.6em;
        }
        li p {
            padding: 0 0 10px 23px;
        }
        em {
            color: #ff0000;
            font-weight: bold;
            font-style: normal;
        }

        .done {
            color: #36c211;
            font-weight: bold;
        }

        .del {
            color: #ccc;
        }
        .del a {
            color: #ccc;
        }
    </style>

    <body>
        <section class="front-cover">
            <h1>Update</h1>
   			<ul>
   				<li>
   					<span class="done">10- Order selected</span>
   					<p>They've asked if the fields could be created on the fly (pulled in by a JSON feed). They will supply the example JSON files for us to work with...</p>
   				   	<p>Table needs to be scrollable for potentially lots of content</p>
					<p>Image will scroll on this page - not fixed like on 'product editor'</p>
   					<p>Quantity box - could be a textbox <i>or</i> a dropdown</p>
   					<p>Top fixed bar should change to black when fixed?</p>
   				</li>
   				<li>
   					<span class="done">10- Order</span>
   					<p>'Create New' button. This is the most important element of the page and needs more prominence. Either Steve to design or advise. Perhaps just change colour and put on the line above?</p>
   				</li>
   				<li>
   					<span class="done">Global Hover States</span>
   					<p>Currently no hover states for buttons and links - Steve to confirm what these should be?</p>
   				</li>
   				<li>
   					<span class="done">12 - Report Orders</span> <em>quite a few additions - so maybe a design?</em>
   					<p>pdf icon to 'view proof'</p>
   					<p>Need an icon to 're-order' an item (re-add to basket)</p>
   					<p>Tickboxes on table not necessary - can remove. Instead need to allow rows to expand to reveal more information (need to clarify what is revealed - design?)</p>
   				</li>
   			</ul>

   			<h1>Notes from Terry</h1>
   			<ul>
   				<li>
   					<p>1) The drop downs are not disappearing when clicked away on the navigation unless you click on the original link.</p> 
   					<p><em>I'm yet to work on the top nav section. I need to rebuild the left nav as per Steve's new design, so it makes sense to do the top nav as part of this (I'm working on the left nav at the moment - so should be onto the top nav shortly)</em></p>
   				</li>
   				<li>
					<p>2) The logo disappears when browser is drawn in and if not displayed on the navigation bar.</p> 
					<p><em>(as per above - I'm yet to work on the top nav but will make sure I fix this)</em>
				<li>
					<p>3) All drop downs where the value is persisted must be a normal select not a bootstrap drop down.
					This is because the drop down must hold a different value which is used and be translatable and selectable.
    				Our frame work creates a special drop down based on a normal select which is object based. You can style the drop down if you want. I used the "bootstrap select" addon.</p> 
    				<p><em>(That makes sense - I was under the impression I shouldn't change too much that the previous developer had already done if I could help it...but 'normal' selects instead of 'pretend' selects sounds more logical!</em></p>
    			</li>
    			<li>
					<p>4) The bread crumb trail can not be inside the graphic. As no processing is done inside the border and does not know what page is being displayed. Title is passed in via the framework as well as the user defined text.</p> 
					<p><em>Ok, I'll update this</em></p>
				</li>
				<li>
					<p>5) User defined text is missing from the graphic. I used "summer note" wysiwyg in the test version.</p> 
					<p><em>Ok, I'll speak to Steve to see if I'm missing a design for this</em></p>
				</li>
				<li>
					<p>6)  On product grid view the button "create" must always be at the bottom otherwise it looks messy.  I just added some text in inspect mode to test this.</p> 
					<p><em>Ok :)</em></p>
				</li>
   			</ul>

   			<h1>Outstanding Work To Do</h1>

   			<ul>
   				<li>3 - Product Editor <em>(need design from Steve)</em></li>
   				<li>5 - Basket <em>(need updated design from Steve)</em></li>
   				<li>5.5 - Checkout <em>(need design from Steve)</em></li>
   				<li>10 - Order Selected <em>(started - need to finish now that have all of the info from James (minus JSON, as that is definitely an extra change) )</em></li>
   				<li>Login/Register - <em>(need design from Steve)</em></li>
   				<li>Left Nav/Top Nav - this is the most important that they want asap (dashboard with navs by end of Tuesday?)</li>
   			</ul>

        </section>
    </body>

</html>