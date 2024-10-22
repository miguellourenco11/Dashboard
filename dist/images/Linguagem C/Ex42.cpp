#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int t1,t2,t3;

	printf("introduza três temperaturas \n");
	scanf("%d" "%d" "%d",&t1,&t2,&t3);
	
	if(t1>t2 && t2>t3)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t3,t2,t1);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t1,t2,t3);
	}

	if(t1>t3 && t3>t2)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t2,t3,t1);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t1,t3,t2);
	}
	
	if(t2>t1 && t1>t3)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t3,t1,t2);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t2,t1,t3);
	}
	
	if(t2>t3 && t3>t1)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t1,t3,t2);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t2,t3,t1);
	}
	
	if(t3>t1 && t1>t2)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t2,t1,t3);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t3,t1,t2);
	}
	
	if(t3>t2 && t2>t1)
	{
		printf("As temperaturas por ordem crescente são %d %d %d \n",t1,t2,t3);
		printf("As temperaturas por ordem decrescente são %d %d %d \n",t3,t2,t1);
	}
	
	printf("\n");	
	system("pause");
}
