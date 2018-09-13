<?php
include 'models/wrap_author.php'
?>

<section id="one" class="wrapper style2 special" style="margin-bottom: -10%">
    <div class="inner">
        <header class="major">
            <h2>Qui est Jean Forteroche?</h2>
            <div class="container">
            <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta, dui ut iaculis sollicitudin, odio magna mollis massa, a bibendum dui risus congue augue. Ut luctus, mauris quis tempor viverra, nulla enim maximus justo, non laoreet lorem felis vitae urna. Vestibulum quis lacus et orci luctus rhoncus non eu eros. Fusce sit amet condimentum arcu. Maecenas urna ante, egestas id enim id, aliquam congue augue. Vivamus vel enim odio. Nunc hendrerit lobortis porta.<br/><br/>

                Curabitur non gravida neque. Fusce elit dui, placerat sit amet gravida eu, feugiat in risus. Mauris a lacus in lorem lobortis posuere. Donec in feugiat tellus. Morbi vulputate feugiat efficitur. Mauris interdum tincidunt augue sed ornare. Suspendisse congue in urna a eleifend. Proin risus massa, sodales eu venenatis sit amet, dictum ut erat.<br/><br/>

                Morbi consequat justo a tortor aliquet placerat. Etiam pharetra est ultricies sodales tristique. Pellentesque tempus vestibulum volutpat. Morbi ac eros porttitor, laoreet neque vel, facilisis lacus. Donec dictum commodo velit, eget dictum nisl tristique eu. Mauris quis dapibus nisi, ut molestie quam. Etiam id diam gravida, placerat nisl quis, aliquam ligula. Nulla enim massa, imperdiet et cursus ut, cursus ac magna. Morbi ultrices est a lorem commodo lobortis. Integer pharetra commodo porta. Aliquam tristique eros sed iaculis laoreet. Sed tempor, purus vestibulum blandit ultricies, odio lorem fermentum metus, vulputate cursus libero eros dapibus tortor. Ut dictum condimentum quam et lobortis. Pellentesque nulla sem, dictum et luctus in, euismod sed justo. In hac habitasse platea dictumst. Vivamus tempus vulputate ultricies.<br/><br/>

                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec nulla diam, dapibus at porttitor id, blandit eu diam. Mauris et odio sit amet quam rutrum rhoncus non viverra tortor. Aliquam nec pretium purus, lacinia lobortis libero. Fusce non mattis enim. Duis mi ligula, vehicula viverra arcu nec, lobortis laoreet ex. Integer vitae egestas mi, at consequat sem. Maecenas vitae nisl tempus, faucibus sem in, vehicula justo.</p>
            </div>
            <div class="row gtr-50 gtr-uniform">
               <div class="col-4" style="margin-top: 7%"><span class="image fit"><img src="images/author.jpg" alt="" /></span></div>
                <div class="col-8">
                    <h4>Me contacter :</h4>
                    <form id="contact-form" onsubmit="submitForm(); return false;">
                        <input type="text" name="demo-name" id="name" placeholder="Votre Nom et Prénom" /><br/>
                        <input type="email" name="email" id="email" placeholder="Votre Adresse Email" /><br/>
                        <input type="text" name="email" id="subject" placeholder="Sujet de Votre Message" /><br/>
                        <textarea name="message" id="message" placeholder="Rédigez votre message" rows="5"></textarea><br/>
                        <button class="button primary icon fa-check" type="submit" name="submit" id="contact-submit"><span id="status"> Envoyer</span></button>
                    </form>
                </div>

        </header>
    </div>
</section>
