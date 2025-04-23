import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, School } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Administrator',
        href: '#',
    },
    {
        title: 'Schools',
        href: '/schools',
    },
];
export default function Index({ schools } : { schools: School[] }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    {schools.map((school) => (
                        <div key={school.id}>{school.nama_sekolah}{school.npsn}</div>
                    ))}
                </div>
            </div>
        </AppLayout>
    );
}
