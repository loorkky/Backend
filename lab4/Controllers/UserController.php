<?php
namespace Controllers;

use Models\UserModel;

/**
 * Class UserController
 * @package Controllers
 *
 * Контролер користувача, який керує взаємодією з моделлю і видом для користувача.
 */
class UserController {
    /**
     * Отримати дані користувача за його ідентифікатором та вивести їх на екран.
     *
     * @param int $userId Ідентифікатор користувача
     */
    public function getUser($userId) {
        $userModel = new UserModel();
        $userData = $userModel->getUserById($userId);
        echo "Дані користувача: {$userData}";
    }
}
