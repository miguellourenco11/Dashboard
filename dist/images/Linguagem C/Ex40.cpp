#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	int i,soma,neg=0,pos=0;
	float med,teste;

	for (i=1;i<=20;i++)
	{
		printf("Introduza a nota do teste");
		printf("\n");
		scanf("%f",&teste);
		soma=soma+teste;
		if(teste>=9.5)
			pos=pos+1;
		else
			neg=neg+1;
	} 
	
	med=soma/(float)20; 
	
	printf("A média é %.2f \n",med);
	printf("Foram contadas %d negativas \n",neg);
	printf("Foram contadas %d positivas \n",pos);
	
	printf("\n");	
	system("pause");
}
