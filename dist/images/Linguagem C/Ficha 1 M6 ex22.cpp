#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int pessoas,idade,menores=0,maiores=0;
		
	printf("introduza o número de pessoas que deseja contabilizar \n");
	scanf("%d",&pessoas);
	
	for (int i=0; i<pessoas; i++)
	{
		printf("introduza a idade dessa pessoa \n");
		scanf("%d",&idade);
		if(idade>=18)
			maiores++;
		if(idade<18)
			menores++;
	}
	
	printf("São menores de idade %d pessoas e maiores de idade %d pessoas \n",menores,maiores);
	printf("\n");	
	system("pause");
}
