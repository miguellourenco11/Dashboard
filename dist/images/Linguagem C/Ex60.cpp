#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	srand(time(NULL));
	
	inicio:
	
	int menu,numero;
	system("cls");
	
	printf("Menu \n");
	printf("1-Totoloto \n");
	printf("2-Euromilhões \n");
	printf("3-Sair \n");
	scanf("%d",&menu);
	
	switch(menu)
	{
		case 1:	
			{
				int num[5],numero[1];
			
				printf("números \n");
				for (int i=0; i<5; i++)
				{
					num[i]=rand()%50;
					printf("%d \n",num[i]);	
				}
					
				printf("\n");
				printf("número da sorte \n");
				
				for (int i=0; i<1; i++)
				{
					numero[i]=rand()%13;
					printf("%d \n",numero[i]);
				}
				system("pause");break;
			}	
			
	
		case 2:
			{
				int num[5],estrela[2];
		
				printf("números \n");
				for (int i=0; i<5; i++)
				{
					num[i]=rand()%50;
					printf("%d \n",num[i]);
				}
				
				printf("\n");
				printf("estrelas \n");
				for (int i=0; i<2; i++)
				{
					estrela[i]=rand()%12;
					printf("%d \n",estrela[i]);	
				}
				system("pause");break;
			}		
	
		case 3:
			{
				printf("Saiu do programa \n");
				system("pause");break;
			}
			
		default: printf("Opção inválida \n");
	}
	
	if(menu==3)
		printf("\n");
	else
		goto inicio;
}
