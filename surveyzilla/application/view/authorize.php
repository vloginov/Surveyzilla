        <div id="box">
            <form name="authorize" action="index.php?action=authorize" method="POST">
                <p>E-mail<br /><input type="text" name="email" />
                <p>Пароль<br /><input type="password" name="password" />
                <p><input type="submit" value="войти" /></p>
            </form>
        </div>
        <p><?= $view->message ?></p>