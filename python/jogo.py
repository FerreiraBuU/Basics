# ----------------primeiro arquivo py----------------
# ----------------joguinho de adivinhar o numero----------------

print("Vamos jogar?")

print('..... (¯`v´¯)♥', '.......•.¸.•´', '....¸.•´', '... (', '☻/', '/▌♥♥', '/ \ ♥♥"', sep='\n')
print("Adivinhe o numero!")
print("Escolha um numero entre 1 e 100!")

numero_secreto = 5

# ----------------while----------------
# tentativa= 3
#
# while (tentativa > 0):
#     escolhido = input("Digite o numero escolhido: ")
#     numero_escolhido = int(escolhido)
#
#     print("Tu digitaste {}".format(numero_escolhido))
#
#     if(numero_escolhido<1 or numero_escolhido>100):
#         print("Escolha um numero entre 1 e 100")
#         continue
#
#     # teste maior / menor ou acerto
#     acertou = numero_secreto == numero_escolhido
#     maior = numero_secreto > numero_escolhido
#     menor = numero_secreto < numero_escolhido
#
#
#     if(acertou):
#         print("Mazaaa! acertou")
#         break
#     else:
#         if(tentativa == 1):
#             print("Suas tentativas acabaram!")
#             break
#         else:
#             if(maior):
#                 print("O numero secreto é maior!")
#             elif(menor):
#                 print("O numero secreto é menor!")
#             tentativa -= 1
#             print("Você tem {} tentativas".format(tentativa))
#             print("\n")
#
#
#
# print("Fim do jogo!")


# ----------------for----------------
tentativa = 3

for rodada in range(tentativa, 0, -1):
    escolhido = input("Digite o numero escolhido: ")
    numero_escolhido = int(escolhido)

    print("Tu digitaste {}".format(numero_escolhido))

    if (numero_escolhido < 1 or numero_escolhido > 100):
        print("Escolha um numero entre 1 e 100")
        continue

    # teste maior / menor ou acerto
    acertou = numero_secreto == numero_escolhido
    maior = numero_secreto > numero_escolhido
    menor = numero_secreto < numero_escolhido

    if (acertou):
        print("Mazaaa! acertou")
        break
    else:
        if (rodada == 1):
            print("Suas tentativas acabaram!")
            break
        else:
            if (maior):
                print("O numero secreto é maior!")
            elif (menor):
                print("O numero secreto é menor!")
            print("Você tem {} tentativas".format(rodada - 1))
            print("\n")

print("Fim do jogo!")


# ----------------------------------------------------------------------
# ----- modificar:
# numero secreto aleatório
# contagem de tentativas quando o numero está fora do range
# ...


# ------ anotações:
# o input() retorna str, tem que mudar
# usa a função int()
