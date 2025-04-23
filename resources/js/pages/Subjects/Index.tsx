import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, Subject } from '@/types';
import { ColumnDef } from "@tanstack/react-table";
import { DataTable } from "@/components/ui/data-table";

export const columns: ColumnDef<Subject>[] = [
    {
      accessorKey: "id",
      header: "No",
    },
    {
      accessorKey: "nama_mapel",
      header: "Mata Pelajaran",
    },
  ]

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Administrator',
        href: '#',
    },
    {
        title: 'Mata Pelajaran',
        href: '/subjects',
    },
];
export default function Index({ subjects }: { subjects: Subject[] }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="p-4">
                <DataTable columns={columns} data={subjects} />
            </div>
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    {subjects.map((subject) => (
                        <div key={subject.id}>{subject.nama_mapel}</div>
                    ))}
                </div>
            </div>
        </AppLayout>
    );
}
