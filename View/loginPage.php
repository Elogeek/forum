
<section class="forum">
    <h3><?= isset($_SESSION['email']) ? 'Vous êtes connecté(e) en tant que ' . $_SESSION['email'] : "Vous n'êtes pas connecté" ?> </h3>


    <div id="comment">
        <label for="subject-comm"> Choisi le sujet que tu veux commenter :</label>
        <select name="subjects" id="subject-comm">
            <option value="game"> Jeux</option>
            <option value="jquery"> JQuery</option>
            <option value="javascript"> Javascript</option>
            <option value="php"> Php</option>
            <option value="html/css"> Html/Css</option>
        </select>
        <textarea name="comm" id="comToSend" placeholder=" Tapez votre commentaire ici ! " maxlength="500"></textarea>
        <div class="flex-row">
            <input type="submit" name="submit" value="Envoyez votre commentaire !" id="sendComm" />
            <?php
            if(!isset($_SESSION['email'])) { ?>
                <div class="flex-row-end">
                    <!-- Link to open the modal -->
                    <a class="btn" href="#modal-1" rel="modal:open" id="connect">Se connecter</a>
                </div> <?php
            } ?>
        </div>
        <?php
        if(!isset($_SESSION['email'])) { ?>
            <div>
                <!-- Modal  -->
                <div id="modal-1" class="modal">
                    <div id="windowConnect">
                        <input type="email" placeholder=" Email"  id="emailConnect"required>
                        <input type="password" placeholder="Password" id="passwordConnect" required>
                    </div>
                    <button type="submit" id="btnConnect"> Me connecter !</button>
                    <a href="#modal-2" rel="modal:open" id="openWdw">Pas encore inscrit?</a>
                </div>

                <!--modal2-->
                <div id="modal-2" class="modal">
                    <div id="singWindow">
                        <input type="email" placeholder=" Email" id="emailSign" required>
                        <input type="password" placeholder="Password" id="passwordSign" required>
                        <button type="submit" id="btnSing"> Valider !</button>
                    </div>
                </div>
            </div> <?php
        }
        ?>
    </div>
    <!--display messages forum here-->
    <div class="comments"></div>
    <div class="subjects"></div>

</section>