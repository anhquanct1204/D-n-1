<?php
function pdo_connection()
{
    $dburl = "mysql:host=localhost;dbname=duanmau1;charset=utf8";
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

function pdo_execute($sql, $params = array())
{
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        $conn = null;
    }
}

function pdo_query($sql, $params = [])
{
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_one($sql, $params = [])
{
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_value($sql, $params = [])
{
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? reset($row) : null;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_execute_returnLastInsertId($sql, $params = [])
{
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params); // Đảm bảo $params là một mảng
        return $conn->lastInsertId();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
