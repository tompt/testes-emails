#!/usr/bin/python3

import MySQLdb
conn = MySQLdb.connect(user='', passwd='', db='', host='localhost')

cursor = conn.cursor()

def query(COMANDO):
        cursor.execute("SELECT * FROM `operacoes` WHERE `operacoes_id` = 106 AND `operacoes_idutilizador` = 26")
        rows = cursor.fetchall()
        for row in rows:
                print(row)

def OPERACOES():
        try:
                OPCAO_FEITO = int(input("Operacoes (1=feito 0=nao feito): "))
        except:
                OPCAO_FEITO =0

        if (OPCAO_FEITO==1):
                cursor.execute("SELECT * FROM `operacoes` WHERE `operacoes_idutilizador` = 26 AND `operacoes_feito` = 1")
                print("Total de operacoes efectuadas:")
        else:
                cursor.execute("SELECT * FROM `operacoes` WHERE `operacoes_idutilizador` = 26 AND `operacoes_feito` = 0")
                print("Total de operacoes por fazer:")

        rows = cursor.fetchall()

        for row in rows:
                print(row)

        print('Total de Registos:', cursor.rowcount)


""" COMECA AQUI """
OPERACOES

COMANDO="SELECT * FROM `operacoes` WHERE `operacoes_id` = 106 AND `operacoes_idutilizador` = 26"
print ("Operacoes com id 106 e utilizador 26")
query(COMANDO)