#!/bin/bash -e

function recreate()
{
	echo -e "\033[1m> Dropping database '$1'...\033[0m\n"
	mysql -u root -p -e "drop database if exists $1"

	echo -e "\033[1m> Creating database '$1'...\033[0m\n"
	mysql -u root -p -e "create database $1 character set utf8"

	echo -e "\033[1m> Grant privileges to user...\033[0m\n"
	mysql -u root -p -e "grant all privileges on $1.* to 'gonow'@'%' identified by 'gonow@123';
flush privileges;"

	echo -e "\033[1m> Importing database '$1'...\033[0m\n"
	mysql -u root -p $1 < $1-dump.sql
}

recreate cakephptdd
recreate cakephptdd_test
