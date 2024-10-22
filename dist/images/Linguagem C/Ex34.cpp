#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int neg=0,pos=0,soma;
	float med,teste;
	
	int i=1;
	
 	while (i<=20)
 	{
 		printf("Introduza a nota do teste \n");
		scanf("%f",&teste);
		soma=soma+teste;
		if(teste>=9.5)
			pos=pos+1;
		else
			neg=neg+1;
		i=i+1;				
	}

	med=soma/(float)20; 
	
	printf("A média é %.2f \n",med);
	printf("Foram contadas %d negativas \n",neg);
	printf("Foram contadas %d positivas \n",pos);
	
	printf("\n");	
	system("pause");
}
