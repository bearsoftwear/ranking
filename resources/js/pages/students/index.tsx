import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/react';

import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { Button } from "@/components/ui/button"
import { FormEventHandler } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Students',
        href: '/students',
    },
];

export default function Index() {
    const { post, setData, data, errors } = useForm<{
        excel: File | null; // Allow both null and File types
    }>({
        excel: null, // Initialize with null for file input
    });

    const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        if (e.target.files && e.target.files[0]) {
            setData('excel', e.target.files[0]); // Set the file in the form data
        }
    };

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('student.import_excel')); // Kirim data form dengan post
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <form className="flex flex-col gap-6" onSubmit={submit}>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="excel">Import</Label>
                    <Input id="excel" type="file" onChange={handleFileChange} />
                    {errors.excel && <p className="text-red-500">{errors.excel}</p>}
                </div>
                <Button type="submit">Submit</Button>
            </form>
        </AppLayout>
    );
}
