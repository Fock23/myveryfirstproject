<!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
            </header>

            <p>Elementum sem parturient nulla quam placerat viverra lo faro poi io dai andiamo di contcat controller
                mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
                donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
                orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>
<!--allora ho il mio form che rimanda sempre alla index -> nel form ho name controller hidden! in tutti! e come value il controller che voglio includere si-->
            <form method="post" action="index.php">
                <input type="hidden" name="controller" value="ContactController" /> 
                <div class="row half">
                    <div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
                    <div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" class="button submit" name="submitContact" value="Invia" />
                    </div>
                </div>
            </form>

        </div>
    </section>