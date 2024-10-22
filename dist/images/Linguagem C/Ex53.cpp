#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int op;
	
	menu:
		printf("Menu \n");
		printf("1-Adicionar cliente \n");
		printf("2-Listar cliente \n");
		printf("3-Editar cliente \n");
		printf("4-Guardar ficheiro \n");
		printf("5-Sair \n");
		scanf("%d",&op);
	
		if(op<=4)
			goto menu;
			
	printf("Pressione qualquer tecla para sair");
	
	printf("\n");	
	system("pause");
}
