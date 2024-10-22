#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int t1,t2,t3,max,min,AT;
	
	printf("Introduza três valores \n");
	scanf("%d" "%d" "%d",&t1,&t2,&t3);
	
	printf("\n");
	
	if (t1>t2&&t1>t3)
		max=t1;
	if (t2>t1&&t2>t3)
		max=t3;
	if (t3>t1&&t3>t2)
		max=t3;
	if (t1<t2&&t1<t3)
		min=t1;
	if (t2<t1&&t2<t3)
		min=t2;
	if (t3<t2&&t3<t1)
		min=t3;
	
	AT=max-min;

	printf("A amplitude térmica é %d \n",AT);
	
	system("pause");
}
