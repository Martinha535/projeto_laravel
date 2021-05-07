import pickle
import os
from sklearn.naive_bayes import GaussianNB

from dados import atributos, resultados


Sintomas = ('Febre', 'Cansaço', 'Tosse', 'Espirro', 'Dores no Corpo', 'Coriza',
            'Dor de Garganta', 'Diarréia', 'Dor de Cabeça', 'Falta de Ar')


def train() -> None:
    modelo = GaussianNB()
    modelo.fit(atributos, resultados)
    pickle.dump(modelo, open('modelo.sav', 'wb'))


def init() -> None:
    print('Responda as perguntas com 0 para Não e 1 para Sim.\n')
    respostas = [int(input(f'Você apresenta {sintoma}? ')) for sintoma in Sintomas]

    modelo = pickle.load(open('modelo.sav', 'rb'))
    resultado = modelo.predict([respostas])

    print('\nResultado:',
          '\nRecomenda-se fazer o teste de corona vírus'
          if resultado[0] else
          '\nPaciente não apresenta sintomas de corona vírus')


if __name__ == '__main__':
    if not os.path.exists('./modelo.sav'):
        train()
    init()
