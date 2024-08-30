<?php
namespace Views;

/**
 * Class UserView
 * @package Views
 *
 * Вид користувача, який відповідає за відображення даних користувача.
 */
class UserView {
    /**
     * Відобразити дані користувача у вигляді HTML.
     *
     * @param string $userData Дані користувача у вигляді рядка
     */
    public function displayUser($userData) {
        echo "<p>{$userData}</p>";
    }
}
