#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

int main() 
{
	setlocale(LC_ALL, "Portuguese");
	
    int valor1, valor2, valor3;
    int melhor, pior;
    float med;

    printf("Digite o primeiro valor \n");
    scanf("%d", &valor1);

    printf("Digite o segundo valor \n");
    scanf("%d", &valor2);

    printf("Digite o terceiro valor \n");
    scanf("%d", &valor3);

    if (valor1 > valor2 && valor2 > valor3) 
    {
    	melhor=valor1;
    	pior=valor3;
	}
	
	if (valor1 > valor3 && valor3 > valor2) 
    {
    	melhor=valor1;
    	pior=valor2;
	}		

    if (valor2 > valor1 && valor1 > valor3) 
    {
    	melhor=valor2;
    	pior=valor3;
	}
	
	if (valor2 > valor3 && valor3 > valor1) 
    {
    	melhor=valor2;
    	pior=valor1;
	}

	if (valor3 > valor1 && valor1 > valor2) 
    {
    	melhor=valor3;
    	pior=valor2;
	}

	if (valor3 > valor2 && valor2 > valor1) 
    {
    	melhor=valor3;
    	pior=valor1;
	}

    med=(valor1 + valor2 + valor3)/(float)3;

    printf("Melhor valor:%d \n", melhor);
    printf("Pior valor:%d \n", pior);
    printf("Média dos valores:%.2f \n", med);
}
