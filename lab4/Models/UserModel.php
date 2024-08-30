<?php
namespace Models;

/**
 * Class UserModel
 * @package Models
 *
 * Модель користувача, яка забезпечує доступ до даних користувачів.
 */
class UserModel {
    /**
     * Отримати дані користувача за його ідентифікатором.
     *
     * @param int $userId Ідентифікатор користувача
     * @return string Дані користувача у вигляді рядка
     */
    public function getUserById($userId) {
        // Логіка отримання даних користувача
        return "Дані користувача з ID {$userId}";
    }
}
