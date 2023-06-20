<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($students->nama); ?></td>
                    <td><?php echo e($students->NIS); ?></td>
                    <td><?php echo e($students->jenis_kelamin); ?></td>
                    <td><?php echo e($students->kelas); ?></td>
                    <td><?php echo e($students->alamat); ?></td>
                    <td><?php echo e($students->no_hp); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/export.blade.php ENDPATH**/ ?>